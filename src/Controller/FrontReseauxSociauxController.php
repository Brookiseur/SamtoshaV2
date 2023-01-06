<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontReseauxSociauxController extends AbstractController
{
    #[Route('/contact/reseaux-sociaux', name: 'reseaux-sociaux')]
    public function index(): Response
    {
        return $this->render('front_reseaux_sociaux/index.html.twig', [
            'controller_name' => 'FrontReseauxSociauxController',
        ]);
    }
}
