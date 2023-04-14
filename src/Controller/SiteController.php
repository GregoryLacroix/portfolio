<?php

namespace App\Controller;

use App\Entity\CustomSite;
use App\Entity\Portfolio;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/', name: 'app_site')]
    public function siteCustom(): Response
    {
        $custom = $this->em->getRepository(CustomSite::class)->findOneBy(['isActive' => 1]);
        //dump($custom);

        $websites = $this->em->getRepository(Portfolio::class)->findBy(['isActive' => 1]);
        //dump($websites);

        return $this->render('site/index.html.twig', [
            'custom' => $custom,
            'websites' => $websites
        ]);
    }
}
