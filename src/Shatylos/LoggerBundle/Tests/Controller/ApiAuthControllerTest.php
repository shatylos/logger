<?php

namespace Shatylos\LoggerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiAuthControllerTest extends WebTestCase
{
    public function testSignIn()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/api/logger/auth/sign-in');
    }

    public function testSignOut()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/api/logger/auth/sign-in');
    }

    public function testChooseUser()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/api/logger/auth/choose-user');
    }

}
