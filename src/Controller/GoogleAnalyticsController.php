<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;   

class GoogleAnalyticsController extends AbstractController
{
    private $analytics; 
    private $profile;
    private $results;
    const URL = "https://gregory-lacroix-pf.com";
    const KEY_FILE_LOCATION = __DIR__ . '/google-json/gregory-lacroix-pf-db4e4e7508fe.json';

    public function __construct(){
        $this->analytics = $this->initializeAnalytics();
        $this->profile = $this->getFirstProfilId($this->analytics);
        $this->results = $this->getResults('ga:pageviews,ga:users,ga:sessions');
    }

    #[Route('/google/initialize/analytics', name: 'app_google_initialise_analytics')]
    public function initializeAnalytics()
    {
        // Crée et configure le client
        $client = new \Google_Client();
        $client->setApplicationName("Hello Analytics Reporting");
        $client->setAuthConfig(self::KEY_FILE_LOCATION);
        $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
        $analytics = new \Google_Service_Analytics($client);
        // dd($analytics);
        return $analytics;
    }

    #[Route('/google/first-profil/analytics', name: 'app_google_first_profil_analytics')]
    public function getFirstProfilId()
    {
        // Récupère la liste des comptes
        $accounts = $this->analytics->management_accounts->listManagementAccounts();
        
        if ($accounts->getItems() && count($accounts->getItems()) > 0) {
            $items = $accounts->getItems();
            $firstAccountId = $items[0]->getId();
            // dd($firstAccountId);
            
            // Récupère la liste des propriétés
            $properties = $this->analytics->management_webproperties
            ->listManagementWebproperties($firstAccountId);
            dump($properties->getItems());
            
            if (count($properties->getItems()) > 0) {
                $items = $properties->getItems();
                // dd($items[1]);
                $firstPropertyId = $items[1]->getId();

            // Récupère la liste des vues
            $profiles = $this->analytics->management_profiles
                ->listManagementProfiles($firstAccountId, $firstPropertyId);

                if (count($profiles->getItems()) > 0) {
                    $items = $profiles->getItems();

                    // Retourne l'ID de la première vue
                    // dd($items[0]->getId());
                    return $items[1]->getId();

                } else {
                    throw new \Exception('No views (profiles) found for this user.');
                }
            } else {
            throw new \Exception('No properties found for this user.');
            }
        } else {
            throw new \Exception('No accounts found for this user.');
        }
    }

    #[Route('/google/get-results/analytics', name: 'app_google_get_results_analytics')]
    public function getResults($metric) {

        // dd($this->profile);
        $data = $this->analytics->data_ga->get(
         'ga:' . $this->profile, // Précise le profil Google Analytics à utiliser
         '30daysAgo', // Précise la date de début
         'today', // Précise la date de fin
         $metric // Précise le métrique utilisé (session, users...)
        );

        return $data;
    }

    #[Route('/google/print-results/analytics', name: 'app_google_print_resuls_analytics')]
    public function printResults($results)
    {
        if (count($results->getRows()) > 0) {
            $rows = $results->getRows();
            $valeur = $rows[0][0];
            return $valeur;
        } else {
            return "Pas de résultat.\n";
        }
    }

    #[Route('/google/results/analytics', name: 'app_google_results_analytics')]
    public function results()
    {
        $results = $this->getResults('users'); // Récupère le nombre d'utilisateurs des 30 derniers jours
        echo $this->printResults($results); // Affiche l'information
    }

    // Fonction qui récupère les informations nécessaires pour le graphique
    public function getChartResults($metric) {
        // dd($this->profile);
        return $this->analytics->data_ga->get(
            'ga:' . $this->profile,
            '60daysAgo',
            'today',
            $metric,
            [
                'dimensions'=>'ga:Date'
            ]
        );
    }

    #[Route('/google/charts/results/analytics', name: 'app_google_chartes_results_analytics')]
    public function chartResults()
    {
        $results = $this->getChartResults('ga:pageviews,ga:users,ga:sessions');
        //dd($results); // Affiche l'information
        return $results;
    }

    #[Route('/google/analytics', name: 'app_google_analytics')]
    function buildChartArray(): Response
    {
        $results = $this->getChartResults('ga:pageviews,ga:users,ga:sessions');
        //dump($results->getTotalsForAllResults());
        //dump($results);

        if (!empty($results->getRows()) && count($results->getRows()) > 0) {

            $rows = $results->getRows(); // On compte les lignes
            $array=[["Date","Pages Vues","Visiteurs","Visites"]]; // Initialisation du tableau avec les nomn des "colonnes"
            foreach($rows as $date){ // Parcours des dates
                $datejour = substr($date[0],-2,2)."/".substr($date[0],-4,2)."/".substr($date[0],0,4); // On formatte la date (pour être joli à l'affichage)
                array_push($array,[$datejour,(int)$date[1],(int)$date[2],(int)$date[3]]); // On ajoute la date et les données du jour au tableau
            }
            $js_array=json_encode($array); // On encode le tout en json
            //return $js_array; // On le retourne
        } 
        // else {
        //     $error = "Aucune données disponible. Elles seront visibles dans 48h.";
        // }	

        // dd($js_array);

        return $this->render('google_analytics/index.html.twig', [
            'js_array' => $js_array,
            'totalsForAllResults' => $results->getTotalsForAllResults()
            // 'error' => $error??null
        ]);        
    }

}
