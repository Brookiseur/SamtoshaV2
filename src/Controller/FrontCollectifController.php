<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontCollectifController extends AbstractController
{
    #[Route('/cours/collectif', name: 'collectif')]
    public function index(): Response
    {
        return $this->render('front_collectif/index.html.twig', [
            'controller_name' => 'FrontCollectifController',
        ]);
    }
}
