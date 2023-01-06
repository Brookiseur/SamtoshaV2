<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminContactController extends AbstractController
{
    #[Route('/admin/contact', name: 'admin_contact')]
    public function index(): Response
    {
        return $this->render('admin_contact/index.html.twig', [
            'controller_name' => 'AdminContactController',
        ]);
    }
}
