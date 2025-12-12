<?php

namespace Monri\Tests;

use Monri\Client;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Client
     */
    protected $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = new Client();
        $this->client->setMerchantKey('TestKeyXULLyvgWyPJSwOHe');
        $this->client->setAuthenticityToken('6a13d79bde8da9320e88923cb3472fb638619ccb');
        $this->client->setEnvironment('test');
    }
}
