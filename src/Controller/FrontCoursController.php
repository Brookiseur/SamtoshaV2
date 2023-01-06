<?php

namespace App\Controller;

use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontCoursController extends AbstractController
{
    #[Route('/cours', name: 'cours')]
    public function index(CoursRepository $coursRepository): Response
    {
        
        return $this->render('front_cours/index.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }

}
