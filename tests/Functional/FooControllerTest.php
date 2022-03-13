<?php

namespace LongitudeOne\CookiesConsentBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FooControllerTest extends WebTestCase
{
    private ?KernelBrowser $client = null;

    private ?ContainerInterface $container = null;

    public function setUp(): void
    {
        $this->client = static::createClient();
        $this->container = $this->client->getContainer();
    }

    public function tearDown(): void
    {
        $this->client = null;
        $this->container = null;
    }

    public function testBarAction()
    {
        $this->client->request('GET', '/');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }
}