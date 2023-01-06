<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use App\Repository\SubmenusRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminNavController extends AbstractController
{
    public function adminNav(MenuRepository $menuRepository, SubmenusRepository $submenusRepository) : Response
    {
        $roleUser=null;
        
        $menu = $menuRepository->findAll();
        $submenus = $submenusRepository->findAll();

        if ($this->getUser() != null ){
        $roleUser = $this->getUser();
        }
        return $this->render('_admin_nav/index.html.twig', [
            'roleUser' => $roleUser,
            'menu'     => $menu,
            'submenus' => $submenus,
        ]);
    }
}
