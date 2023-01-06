<?php

namespace App\DataFixtures;

use App\Entity\ReseauxSociaux;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ReseauxSociauxFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $reseauxSociaux = new ReseauxSociaux();
        $reseauxSociaux->setName('Facebook');
        $reseauxSociaux->setImageName('facebook.png');
        $reseauxSociaux->setLienExterne('https://www.facebook.com/samtosha.yoga.alsace');
        $manager->persist($reseauxSociaux);

        $reseauxSociaux = new ReseauxSociaux();
        $reseauxSociaux->setName('Instagram');
        $reseauxSociaux->setImageName('instagram.png');
        $reseauxSociaux->setLienExterne('https://www.instagram.com/samtosha.yoga/');
        $manager->persist($reseauxSociaux);

        $reseauxSociaux = new ReseauxSociaux();
        $reseauxSociaux->setName('Discord');
        $reseauxSociaux->setImageName('discord.png');
        $reseauxSociaux->setLienExterne('https://discord.com/invite/mgqMyJBxvv');
        $manager->persist($reseauxSociaux);

        $manager->flush();
    }
}
