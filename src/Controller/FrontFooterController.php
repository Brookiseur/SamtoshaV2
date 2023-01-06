<?php

namespace App\Controller;

use App\Repository\ReseauxSociauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontFooterController extends AbstractController
{
    public function frontFooter(ReseauxSociauxRepository $reseauxSociauxRepository): Response
    {

        $reseauxSociaux = $reseauxSociauxRepository->findAll();

        return $this->render('_front_footer/index.html.twig', [
            'reseauxSociaux' => $reseauxSociaux,
        ]);
    }
}
