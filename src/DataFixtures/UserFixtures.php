<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder; 
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setName('Gueudin');
        $user->setFirstname('Jean');
        $user->setIsVerified('true');
        $user->setEmail('Jeangueudin@user.com');
        $user->setRoles(["ROLE_USER"]);
        $encodePassword = $this->encoder->hashPassword($user, 'passuser');
        $user->setPassword($encodePassword);
        $manager->persist($user);

        $user = new User();
        $user->setName('Tine');
        $user->setFirstname('Nico');
        $user->setIsVerified('true');
        $user->setEmail('Nicotine@client.com');
        $user->setRoles(["ROLE_USER", "ROLE_CLIENT"]);
        $encodePassword = $this->encoder->hashPassword($user, 'passclient');
        $user->setPassword($encodePassword);
        $manager->persist($user);

        $user = new User();
        $user->setName('Martinel');
        $user->setFirstname('Lea');
        $user->setIsVerified('true');
        $user->setEmail('Leamartinel@admin.com');
        $user->setRoles(["ROLE_USER", "ROLE_ADMIN"]);
        $encodePassword = $this->encoder->hashPassword($user, 'passadmin');
        $user->setPassword($encodePassword);
        $manager->persist($user);

        $manager->flush();
    }
}
