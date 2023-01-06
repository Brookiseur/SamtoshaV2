<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontAtelierController extends AbstractController
{
    #[Route('/cours/atelier', name: 'atelier')]
    public function index(): Response
    {
        return $this->render('front_atelier/index.html.twig', [
            'controller_name' => 'FrontAtelierController',
        ]);
    }
}
