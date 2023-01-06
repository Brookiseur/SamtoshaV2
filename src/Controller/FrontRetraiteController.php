<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontRetraiteController extends AbstractController
{
    #[Route('/cours/retraite', name: 'retraite')]
    public function index(): Response
    {
        return $this->render('front_retraite/index.html.twig', [
            'controller_name' => 'FrontRetraiteController',
        ]);
    }
}
