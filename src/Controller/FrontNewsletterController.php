<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontNewsletterController extends AbstractController
{
    #[Route('/contact/newsletter', name: 'newsletter')]
    public function index(): Response
    {
        return $this->render('front_newsletter/index.html.twig', [
            'controller_name' => 'FrontNewsletterController',
        ]);
    }
}
