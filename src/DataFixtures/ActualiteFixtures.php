<?php

namespace App\DataFixtures;

use App\Entity\Actualite;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ActualiteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actualite = new Actualite();
        $actualite->setTag('carousel2');
        $actualite->setImageName('actualite1.jpg');
        $actualite->setIsActive(true);
        $manager->persist($actualite);

        $actualite = new Actualite();
        $actualite->setTag('carousel2');
        $actualite->setImageName('actualite2.jpg');
        $actualite->setIsActive(true);
        $manager->persist($actualite);

        $actualite = new Actualite();
        $actualite->setTag('carousel2');
        $actualite->setImageName('actualite3.jpg');
        $actualite->setIsActive(true);
        $manager->persist($actualite);

        $actualite = new Actualite();
        $actualite->setTag('carousel1');
        $actualite->setImageName('presentation1.png');
        $actualite->setIsActive(true);
        $manager->persist($actualite);

        $manager->flush();
    }
}
