<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontEnLigneController extends AbstractController
{
    #[Route('/cours/enligne', name: 'en-ligne')]
    public function index(): Response
    {
        return $this->render('front_en_ligne/index.html.twig', [
            'controller_name' => 'FrontEnLigneController',
        ]);
    }
}
