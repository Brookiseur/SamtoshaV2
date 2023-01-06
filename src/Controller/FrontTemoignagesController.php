<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontTemoignagesController extends AbstractController
{
    #[Route('/samtosha/temoignages', name: 'temoignages')]
    public function index(): Response
    {
        return $this->render('front_temoignages/index.html.twig', [
            'controller_name' => 'FrontTemoignagesController',
        ]);
    }
}
