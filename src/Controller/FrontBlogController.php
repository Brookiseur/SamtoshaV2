<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontBlogController extends AbstractController
{
    #[Route('/samtosha/blog', name: 'blog')]
    public function index(): Response
    {
        return $this->render('front_blog/index.html.twig', [
            'controller_name' => 'FrontBlogController',
        ]);
    }
}
