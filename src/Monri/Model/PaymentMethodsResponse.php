<?php

namespace Monri\Model;

class PaymentMethodsResponse
{
    /**
     * @var array<PaymentMethod>
     */
    private $data;
    /**
     * @var string
     */
    private $status;

    /**
     * @param array $data
     * @param string $status
     */
    public function __construct(array $data, string $status)
    {
        $this->data = $data;
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

}