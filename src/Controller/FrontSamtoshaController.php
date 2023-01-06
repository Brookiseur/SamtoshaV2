<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontSamtoshaController extends AbstractController
{
    #[Route('/samtosha', name: 'samtosha')]
    #[Route('/', name: 'samtosha')]
    public function index(): Response
    {
        return $this->render('front_samtosha/index.html.twig', [
            'controller_name' => 'FrontSamtoshaController',
        ]);
    }
}
