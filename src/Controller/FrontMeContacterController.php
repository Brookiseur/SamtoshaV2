<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontMeContacterController extends AbstractController
{
    #[Route('/contact/me-contacter', name: 'me-contacter')]
    public function index(): Response
    {
        return $this->render('front_me_contacter/index.html.twig', [
            'controller_name' => 'FrontMeContacterController',
        ]);
    }
}
