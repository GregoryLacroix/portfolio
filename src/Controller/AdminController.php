<?php

namespace App\Controller;

use App\Entity\CustomSite;
use App\Entity\Portfolio;
use App\Form\CustomFormType;
use App\Form\PortfolioFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{   
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
        ]);
    }

    #[Route('/admin/custom-website', name: 'app_custom')]
    #[Route('/admin/custom-website/{id}/edit', name: 'app_custom_edit')]
    public function customSite(Request $request, CustomSite $custom = null): Response
    {
        if(!$custom)
            $custom = new CustomSite();
        
        $customForm = $this->createForm(CustomFormType::class, $custom);
        $customForm->handleRequest($request);

        //dump($request);

        if($customForm->isSubmitted() && $customForm->isValid()){

            $this->em->persist($custom);
            $this->em->flush();

            $txt = 'enregistrées';
            if($custom->getId())
                $txt = 'modifiées';

            $this->addFlash('success', "Les données ont été $txt avec succès.");

            return $this->redirectToRoute('app_custom_listing');
        }

        return $this->render('admin/custom.website.html.twig', [
            'customForm' => $customForm->createView()
        ]);
    }

    #[Route('/admin/custom-website-listing', name: 'app_custom_listing')]
    public function customSiteListing(Request $request): Response
    {
        $customs = $this->em->getRepository(CustomSite::class)->findAll();
        // dump($customs);

        return $this->render('admin/custom.website.listing.html.twig', [
            'customs' => $customs
        ]);
    }

    #[Route('/admin/ajax/statut/custom', name: 'admin_ajax_statut')]
    public function ajaxStatusCustom(Request $request)
    {
        $search = $request->get('parameters');

        if($search['category'] == 'custom')
            $repository = $this->em->getRepository(CustomSite::class);
        elseif($search['category'] == 'portfolio')
            $repository = $this->em->getRepository(Portfolio::class);

        $data = $repository->find($search['id']);

        if ($search['statut'] == 1)
            $data->setIsActive(1);
        elseif ($search['statut'] == 0)
            $data->setIsActive(0);

        $this->em->persist($data);
        $this->em->flush();

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse($search);
        }
    }

    #[Route('/admin/custom-portfolio/add', name: 'app_custom_portfolio_add')]
    #[Route('/admin/custom-portfolio/edit/{id}', name: 'app_custom_portfolio_edit')]
    public function customPortfolioPost(Request $request, Portfolio $webSite = null): Response
    {
        if(!$webSite)
            $webSite = new Portfolio();
        $formWebSite = $this->createForm(PortfolioFormType::class, $webSite);
        $formWebSite->handleRequest($request);

        if($formWebSite->isSubmitted() && $formWebSite->isValid()){
            $this->em->persist($webSite);
            $this->em->flush();

            $txt = 'enregistrées';
            if($webSite->getId())
                $txt = 'modifiées';

            $this->addFlash('success', "Les données ont été $txt avec succès.");

            return $this->redirectToRoute('app_custom_portfolio');
        }

        return $this->render('admin/custom.portfolio.add.html.twig', [
            'formWebSite' => $formWebSite->createView()
        ]);
    }

    #[Route('/admin/custom-portfolio-listing', name: 'app_custom_portfolio')]
    public function customPortfolio(Request $request): Response
    {
        $portfolios = $this->em->getRepository(Portfolio::class)->findAll();
        //dump($portfolios);

        return $this->render('admin/custom.portfolio.listing.html.twig', [
            'portfolios' => $portfolios
        ]);
    }
}
