<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use App\Repository\SubmenusRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontNavController extends AbstractController
{
    // #[Route('/nav', name: 'app_front_nav')]



    public function frontNav(MenuRepository $menuRepository, SubmenusRepository $submenusRepository) : Response
    {
        $roleUser=null;
        
        $menu = $menuRepository->findAll();
        $submenus = $submenusRepository->findAll();

        if ($this->getUser() != null ){
        $roleUser = $this->getUser();
        }
        return $this->render('_front_nav/index.html.twig', [
            'roleUser' => $roleUser,
            'menu'     => $menu,
            'submenus' => $submenus,
        ]);
    }

}
