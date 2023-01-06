<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontMesMediasController extends AbstractController
{
    #[Route('/mon-compte/mes-medias', name: 'mes-medias')]
    public function index(): Response
    {
        return $this->render('front_mes_medias/index.html.twig', [
            'controller_name' => 'FrontMesMediasController',
        ]);
    }
}
