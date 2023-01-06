<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminComptabiliteController extends AbstractController
{
    #[Route('/admin/comptabilite', name: 'admin_comptabilite')]
    public function index(): Response
    {
        return $this->render('admin_comptabilite/index.html.twig', [
            'controller_name' => 'AdminComptabiliteController',
        ]);
    }
}
