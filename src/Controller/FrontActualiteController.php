<?php

namespace App\Controller;

use App\Repository\ActualiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontActualiteController extends AbstractController
{
    #[Route('/samtosha/actualite', name: 'actualite')]
    public function index(ActualiteRepository $actualiteRepository): Response
    {
        $imagesCarousel2 = $actualiteRepository->findBy(["tag"=>"carousel2"]);
        $imagesCarousel1 = $actualiteRepository->findBy(["tag"=>"carousel1"]);
        $imagesActualite = $actualiteRepository->findOneBy(["isActive"=>true]);

        return $this->render('front_actualite/index.html.twig', [
            'imagesActualite' => $imagesActualite,
            'imagesCarousel1' => $imagesCarousel1,
            'imagesCarousel2'=> $imagesCarousel2,
        ]);
    }
}
