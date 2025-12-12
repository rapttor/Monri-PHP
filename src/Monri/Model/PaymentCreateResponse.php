<?php

namespace Monri\Model;

class PaymentCreateResponse
{

    /**
     * @var string | null
     */
    private $id;
    /**
     * @var string | null
     */
    private $clientSecret;
    /**
     * @var string | null
     */
    private $status;

    /**
     * @param string|null $id
     * @param string|null $clientSecret
     * @param string|null $status
     */
    public function __construct(
        ?string $id,
        ?string $clientSecret,
        ?string $status
    ) {
        $this->id = $id;
        $this->clientSecret = $clientSecret;
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
}
