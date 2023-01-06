<?php

namespace App\DataFixtures;

use App\Entity\Menu;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MenuFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $menu = new Menu();
        $menu->setImageName('logo.png');
        $menu->setHref('samtosha');
        $menu->setSlug('logo');
        $menu->setForVisitor(true);
        $menu->setForUser(true);
        $menu->setForAdminBoard(false);
        $manager->persist($menu);

        $menu = new Menu();
        $menu->setTitle('Samtosha');
        $menu->setHref('samtosha');
        $menu->setAdminHref('admin_samtosha');
        $menu->setSlug('samtosha');
        $menu->setForVisitor(true);
        $menu->setForUser(true);
        $menu->setForAdminBoard(true);
        $manager->persist($menu);

        $menu = new Menu();
        $menu->setTitle('Cours');
        $menu->setHref('cours');
        $menu->setAdminHref('admin_cours');
        $menu->setSlug('cours');
        $menu->setForVisitor(true);
        $menu->setForUser(true);
        $menu->setForAdminBoard(true);
        $manager->persist($menu);

        $menu = new Menu();
        $menu->setTitle('Planning');
        $menu->setHref('planning');
        $menu->setAdminHref('admin_planning');
        $menu->setSlug('planning');
        $menu->setForVisitor(true);
        $menu->setForUser(true);
        $menu->setForAdminBoard(true);
        $manager->persist($menu);

        $menu = new Menu();
        $menu->setTitle('Contact');
        $menu->setHref('contact');
        $menu->setAdminHref('admin_contact');
        $menu->setSlug('contact');
        $menu->setForVisitor(true);
        $menu->setForUser(true);
        $menu->setForAdminBoard(true);
        $manager->persist($menu);

        $menu = new Menu();
        $menu->setTitle('');
        $menu->setImageName('imagecompte.png');
        $menu->setHref('se-connecter');
        $menu->setAdminHref('');
        $menu->setSlug('compte');
        $menu->setForVisitor(true);
        $menu->setForUser(false);
        $menu->setForAdminBoard(false);
        $manager->persist($menu);

        $menu = new Menu();
        $menu->setTitle('Mon compte');
        $menu->setHref('mon-compte');
        $menu->setAdminHref('');
        $menu->setSlug('mon-compte');
        $menu->setForVisitor(false);
        $menu->setForUser(true);
        $menu->setForAdminBoard(false);
        $manager->persist($menu);

        $menu = new Menu();
        $menu->setTitle('Comptabilité');
        $menu->setImageName('');
        $menu->setHref('comptabilite');
        $menu->setAdminHref('admin_comptabilite');
        $menu->setSlug('comptabilite');
        $menu->setForVisitor(false);
        $menu->setForUser(false);
        $menu->setForAdminBoard(true);
        $manager->persist($menu);

        $menu = new Menu();
        $menu->setTitle('Aller sur le site');
        $menu->setImageName('');
        $menu->setAdminHref('samtosha');
        $menu->setForVisitor(false);
        $menu->setForUser(false);
        $menu->setForAdminBoard(true);
        $manager->persist($menu);

        $manager->flush();
    }
}
