<?php

namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerTest extends WebTestCase
{
    public function testGetone()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getOne');
    }

}
