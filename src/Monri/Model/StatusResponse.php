<?php

namespace Monri\Model;

class StatusResponse
{
    /**
     * @var PaymentResult | null
     */
    private $paymentResult;
    /**
     * @var string| null
     */
    private $status;
    /**
     * @var string| null
     */
    private $paymentStatus;
    /**
     * @var string| null
     */
    private $clientSecret;

    public function __construct(
        ?PaymentResult $paymentResult,
        ?string        $status,
        ?string        $paymentStatus,
        ?string        $clientSecret
    ) {
        $this->paymentResult = $paymentResult;
        $this->status = $status;
        $this->paymentStatus = $paymentStatus;
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return PaymentResult|null
     */
    public function getPaymentResult(): ?PaymentResult
    {
        return $this->paymentResult;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    /**
     * @return string|null
     */
    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }
}
