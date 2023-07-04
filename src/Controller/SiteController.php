<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Portfolio;
use App\Entity\CustomSite;
use App\Service\ServiceMailer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
    const SMTP = 'node29-eu.n0c.com';
    const USERNAME = 'contact@gregory-lacroix-pf.com';
    const PASSWORD = 'Turkish!28410';
    const CC = 'glx78.pf@gmail.com';
    const BCC = 'contact@gregory-lacroix-pf.com';
    const EMAILTO = 'contact@gregory-lacroix-pf.com';

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/', name: 'app_site')]
    public function siteCustom(): Response
    {
        $custom = $this->em->getRepository(CustomSite::class)->findOneBy(['isActive' => 1]);
        // dump($custom);

        $websites = $this->em->getRepository(Portfolio::class)->findBy(['isActive' => 1]);
        //dump($websites);

        return $this->render('site/index.html.twig', [
            'custom' => $custom,
            'websites' => $websites
        ]);
    }

    #[Route('/ajax/contact', name: 'app_ajax_contact')]
    public function contact(Request $request, EntityManagerInterface $manager, ServiceMailer $serviceMailer): Response
    {
        $search = $request->get('parameters');
        $contact = new Contact();
        $contact->setContact(strip_tags(htmlspecialchars(trim($search['contact']))));
        $contact->setEmail(strip_tags(htmlspecialchars(trim($search['email']))));
        $contact->setPhone(strip_tags(htmlspecialchars(trim($search['phone']))));
        $contact->setMessage(strip_tags(htmlspecialchars(trim($search['message']))));

        $this->em->persist($contact);
        $this->em->flush();
        
        $options = [
            'setFrom' => $contact->getEmail(),
            'to' => self::EMAILTO,
            'cc' => self::CC, 
            'bcc' => self::BCC,
            'subject' => 'Informations GLX',
            'body' => $contact->getMessage(),
            'smtp' => self::SMTP,
            'username' => self::USERNAME,
            'password' => self::PASSWORD
        ];
        $serviceMailer->mailer($options);

        return new JsonResponse();
    }

    #[Route('/mentions-légales', name: 'app_mentions')]
    public function siteMentions(): Response
    {
        $custom = $this->em->getRepository(CustomSite::class)->findOneBy(['isActive' => 1]);
        // dd($custom);

        // $websites = $this->em->getRepository(Portfolio::class)->findBy(['isActive' => 1]);
        // dd($websites);

        return $this->render('site/mentions.html.twig', [
            'custom' => $custom,
            // 'websites' => $websites
        ]);
    }
}
