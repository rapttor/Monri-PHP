<?php

namespace Monri\Model;

class CustomerResponse
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $merchantCustomerId;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $deleted;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $country;
    /**
     * @var string
     */
    private $zipCode;
    /**
     * @var string
     */
    private $address;
    /**
     * @var array
     */
    private $metadata;
    /**
     * @var string
     */
    private $createdAt;
    /**
     * @var string
     */
    private $updatedAt;
    /**
     * @var string
     */
    private $deletedAt;

    /**
     * @param string|null $uuid
     * @param string|null $merchantCustomerId
     * @param string|null $description
     * @param string|null $email
     * @param string|null $name
     * @param string|null $phone
     * @param string|null $status
     * @param string|null $deleted
     * @param string|null $city
     * @param string|null $country
     * @param string|null $zipCode
     * @param string|null $address
     * @param string|null $metadata
     * @param string|null $createdAt
     * @param string|null $updatedAt
     * @param string|null $deletedAt
     */
    public function __construct(
        ?string $uuid,
        ?string $merchantCustomerId,
        ?string $description,
        ?string $email,
        ?string $name,
        ?string $phone,
        ?string $status,
        ?string $deleted,
        ?string $city,
        ?string $country,
        ?string $zipCode,
        ?string $address,
        ?array $metadata,
        ?string $createdAt,
        ?string $updatedAt,
        ?string $deletedAt
    ) {
        $this->id = $uuid;
        $this->merchantCustomerId = $merchantCustomerId;
        $this->description = $description;
        $this->email = $email;
        $this->name = $name;
        $this->phone = $phone;
        $this->status = $status;
        $this->deleted = $deleted;
        $this->city = $city;
        $this->country = $country;
        $this->zipCode = $zipCode;
        $this->address = $address;
        $this->metadata = $metadata;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->deletedAt = $deletedAt;
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
    public function getMerchantCustomerId(): ?string
    {
        return $this->merchantCustomerId;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
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
    public function getDeleted(): ?string
    {
        return $this->deleted;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return array|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
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
    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

    public function getCustomerData(): ?array
    {
        return [
            "id" => $this->getId(),
            "name" => $this->getName(),
            "phone" => $this->getPhone(),
            "status" => $this->getStatus(),
            "deleted" => $this->getDeleted(),
            "city" => $this->getCity(),
            "country" => $this->getCountry(),
            "zip" => $this->getZipCode(),
            "address" => $this->getAddress(),
            "meta" => $this->getMetadata(),
            "created_at" => $this->getCreatedAt(),
            "updated_at" => $this->getUpdatedAt(),
            "deleted_at" => $this->getDeletedAt()

        ];
    }
}
