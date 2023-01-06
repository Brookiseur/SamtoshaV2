<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontHistoriqueDAchatsController extends AbstractController
{
    #[Route('/mon-compte/historique-d-achats', name: 'historique-d-achats')]
    public function index(): Response
    {
        return $this->render('front_historique_d_achats/index.html.twig', [
            'controller_name' => 'FrontHistoriqueDAchatsController',
        ]);
    }
}
