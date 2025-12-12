<?php

namespace Monri\Model;

class AccessTokenCreateResponse
{
    /**
     * @var string
     */
    private $accessToken;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $tokenType;
    /**
     * @var string
     */
    private $expiresIn;

    /**
     * @param string $accessToken
     * @param string $status
     * @param string $tokenType
     * @param string $expiresIn
     */
    public function __construct(string $accessToken, string $status, string $tokenType, string $expiresIn)
    {
        $this->accessToken = $accessToken;
        $this->status = $status;
        $this->tokenType = $tokenType;
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    /**
     * @return string
     */
    public function getExpiresIn(): string
    {
        return $this->expiresIn;
    }


}