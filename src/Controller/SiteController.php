<?php

namespace App\Controller;

use App\Entity\CustomSite;
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
    public function index(): Response
    {
        $custom = $this->em->getRepository(CustomSite::class)->findOneBy(['isActive' => 1]);
        dump($custom);

        return $this->render('site/index.html.twig', [
            'custom' => $custom
        ]);
    }
}
