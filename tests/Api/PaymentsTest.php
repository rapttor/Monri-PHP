<?php

namespace Monri\Tests\Api;

use Monri\Exception\MonriException;
use Monri\Tests\TestCase;

class PaymentsTest extends TestCase
{

    /**
     * @throws MonriException
     * @throws \Exception
     */
    public function testCreate()
    {
        $response = $this->client->payments()->create([
            'order_number' => "" . random_int(100000, 999999),
            'amount' => 1000,
            'currency' => 'EUR',
            'transaction_type' => 'purchase'
        ]);
        $this->assertNotNull($response);
        $this->assertNotNull($response->getId());
        $this->assertEquals('approved', $response->getStatus());
    }

    /**
     * @throws MonriException
     * @throws \Exception
     */
    public function testStatus()
    {
        $response = $this->client->payments()->create([
            'order_number' => "" . random_int(100000, 999999),
            'amount' => 1000,
            'currency' => 'EUR',
            'transaction_type' => 'purchase'
        ]);
        $this->assertNotNull($response);
        $this->assertNotNull($response->getId());
        $this->assertEquals('approved', $response->getStatus());

        $response = $this->client->payments()->status($response->getId());
        $this->assertNotNull($response);
        $this->assertEquals('approved', $response->getStatus());
        $this->assertNotNull($response->getPaymentResult());
        $this->assertEquals('action-required',$response->getPaymentResult()->getStatus());
    }
}
