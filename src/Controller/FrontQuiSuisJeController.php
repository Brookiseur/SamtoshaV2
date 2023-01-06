<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontQuiSuisJeController extends AbstractController
{
    #[Route('/samtosha/qui-suis-je', name: 'qui-suis-je')]
    public function index(): Response
    {
        return $this->render('front_qui_suis_je/index.html.twig', [
            'controller_name' => 'FrontQuiSuisJeController',
        ]);
    }
}
