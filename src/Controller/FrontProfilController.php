<?php

namespace App\Controller;

use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class FrontProfilController extends AbstractController
{
    #[Route('/mon-compte', name: 'mon-compte')]
    #[Route('/mon-compte', name: 'mes-informations')]
    public function index(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $userPasswordHasherInterface): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid()){
            if ($form->get('plainPassword')->getData()){

                $encodedPassword = $userPasswordHasherInterface->hashPassword($user, $form->get('plainPassword')->getData());
                $user->setPassword($encodedPassword);
            }

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Votre profil a bien été mis à jour');
            return $this->redirectToRoute('mon-compte', [], Response::HTTP_SEE_OTHER);
        }




        return $this->render('front_profil/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
