<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPlanningController extends AbstractController
{
    #[Route('/admin/planning', name: 'admin_planning')]
    public function index(): Response
    {
        return $this->render('admin_planning/index.html.twig', [
            'controller_name' => 'AdminPlanningController',
        ]);
    }
}
