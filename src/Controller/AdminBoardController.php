<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminBoardController extends AbstractController
{
    #[Route('/adminboard', name: 'adminboard')]
    public function index(): Response
    {
        return $this->render('admin_board/index.html.twig', [
            'controller_name' => 'AdminBoardController',
        ]);
    }
}
