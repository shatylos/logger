<?php

namespace Shatylos\LoggerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiGetControllerTest extends WebTestCase
{
    public function testGetfilelist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/logger/get/file-list');
    }

    public function testGetfiledetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/logger/get/file-detail');
    }

    public function testGetfilesdetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/logger/get/files-detail');
    }

    public function testGetuserslist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/logger/get/users-list');
    }

    public function testSearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/logger/get/search');
    }

}
