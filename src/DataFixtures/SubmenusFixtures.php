<?php

namespace App\DataFixtures;

use App\Entity\Submenus;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SubmenusFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $submenus = new Submenus();
        $submenus->setTitle('Actualité');
        $submenus->setHref('actualite');
        $submenus->setChild('samtosha');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Blog');
        $submenus->setHref('blog');
        $submenus->setChild('samtosha');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Témoignages');
        $submenus->setHref('temoignages');
        $submenus->setChild('samtosha');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Qui suis-je ?');
        $submenus->setHref('qui-suis-je');
        $submenus->setChild('samtosha');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Pourquoi le yoga ?');
        $submenus->setHref('pourquoi-le-yoga');
        $submenus->setChild('samtosha');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Collectif');
        $submenus->setHref('collectif');
        $submenus->setChild('cours');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Privé');
        $submenus->setHref('prive');
        $submenus->setChild('cours');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('En ligne');
        $submenus->setHref('en-ligne');
        $submenus->setChild('cours');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Atelier');
        $submenus->setHref('atelier');
        $submenus->setChild('cours');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Retraite');
        $submenus->setHref('retraite');
        $submenus->setChild('cours');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Newsletter');
        $submenus->setHref('newsletter');
        $submenus->setChild('contact');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Réseaux sociaux');
        $submenus->setHref('reseaux-sociaux');
        $submenus->setChild('contact');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Me contacter');
        $submenus->setHref('me-contacter');
        $submenus->setChild('contact');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Se connecter');
        $submenus->setHref('se-connecter');
        $submenus->setChild('compte');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Créer un compte');
        $submenus->setHref('creer-un-compte');
        $submenus->setChild('compte');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Mes informations');
        $submenus->setHref('mes-informations');
        $submenus->setChild('mon-compte');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Mes médias');
        $submenus->setHref('mes-medias');
        $submenus->setChild('mon-compte');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Historique d\'achats');
        $submenus->setHref('historique-d-achats');
        $submenus->setChild('mon-compte');
        $submenus->setForUser(true);
        $submenus->setForAdmin(false);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('AdminBoard');
        $submenus->setHref('adminboard');
        $submenus->setChild('mon-compte');
        $submenus->setForUser(false);
        $submenus->setForAdmin(true);
        $manager->persist($submenus);

        $submenus = new Submenus();
        $submenus->setTitle('Se déconnecter');
        $submenus->setHref('app_logout');
        $submenus->setChild('mon-compte');
        $submenus->setForUser(true);
        $submenus->setForAdmin(true);
        $submenus->setForAdminBoard(true);
        $manager->persist($submenus);

        $manager->flush();
    }
}
