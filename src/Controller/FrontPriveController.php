<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontPriveController extends AbstractController
{
    #[Route('/cours/prive', name: 'prive')]
    public function index(): Response
    {
        return $this->render('front_prive/index.html.twig', [
            'controller_name' => 'FrontPriveController',
        ]);
    }
}
