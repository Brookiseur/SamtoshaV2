<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontPourquoiLeYogaController extends AbstractController
{
    #[Route('/samtosha/pourquoi-le-yoga', name: 'pourquoi-le-yoga')]
    public function index(): Response
    {
        return $this->render('front_pourquoi_le_yoga/index.html.twig', [
            'controller_name' => 'FrontPourquoiLeYogaController',
        ]);
    }
}
