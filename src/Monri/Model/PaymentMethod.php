<?php

namespace Monri\Model;

class PaymentMethod
{
    /**
     * @var string | null
     */
    private $status;
    /**
     * @var string | null
     */
    private $id;
    /**
     * @var string | null
     */
    private $maskedPan;
    /**
     * @var string | null
     */
    private $expirationDate;
    /**
     * @var string | null
     */
    private $keepUntil;
    /**
     * @var string | null
     */
    private $createdAt;
    /**
     * @var string | null
     */
    private $updatedAt;
    /**
     * @var string | null
     */
    private $customerUuid;
    /**
     * @var string | null
     */
    private $token;
    /**
     * @var bool | null
     */
    private $expired;

    /**
     * @param string|null $status
     * @param string|null $id
     * @param string|null $maskedPan
     * @param string|null $expirationDate
     * @param string|null $keepUntil
     * @param string|null $createdAt
     * @param string|null $updatedAt
     * @param string|null $customerUuid
     * @param string|null $token
     * @param bool|null $expired
     */
    public function __construct(
        ?string $status,
        ?string $id,
        ?string $maskedPan,
        ?string $expirationDate,
        ?string $keepUntil,
        ?string $createdAt,
        ?string $updatedAt,
        ?string $customerUuid,
        ?string $token,
        ?bool $expired
    ) {
        $this->status = $status;
        $this->id = $id;
        $this->maskedPan = $maskedPan;
        $this->expirationDate = $expirationDate;
        $this->keepUntil = $keepUntil;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->customerUuid = $customerUuid;
        $this->token = $token;
        $this->expired = $expired;
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
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    /**
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    /**
     * @return string|null
     */
    public function getKeepUntil(): ?string
    {
        return $this->keepUntil;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @return string|null
     */
    public function getCustomerUuid(): ?string
    {
        return $this->customerUuid;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @return bool|null
     */
    public function getExpired(): ?bool
    {
        return $this->expired;
    }
}
