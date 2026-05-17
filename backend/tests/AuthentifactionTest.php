<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\User;

class AuthenticationTest extends ApiTestCase
{


    public function testLogin(): void
    {
        $client = self::createClient();
        $container = self::getContainer();

        $user = new User();
        $user->setEmail('Mandalorien@gmail.com');
        $user->setPassword($container->get('security.user_password_hasher')->hashPassword($user, '$3CR3T'));

        $manager = $container->get('doctrine')->getManager();
        $manager->persist($user)
        $manager->flush();
    }
}
