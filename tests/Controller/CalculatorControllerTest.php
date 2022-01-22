<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function testCalculator(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/calculator');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Calculator');
    }
}