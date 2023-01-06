<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminSamtoshaController extends AbstractController
{
    #[Route('/admin/samtosha', name: 'admin_samtosha')]
    public function index(): Response
    {
        return $this->render('admin_samtosha/index.html.twig', [
            'controller_name' => 'AdminSamtoshaController',
        ]);
    }
}
