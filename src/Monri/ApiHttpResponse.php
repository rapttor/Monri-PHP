<?php

namespace Monri;

class ApiHttpResponse
{
    /**
     * @var array
     */
    private $body;
    /**
     * @var string
     */
    private $responseBody;
    /**
     * @var integer
     */
    private $code;
    /**
     * @var array
     */
    private $headers;
    /**
     * @var \Exception
     */
    private $exception;

    /**
     * @param array $body
     * @param string $responseBody
     * @param int $code
     * @param array $headers
     * @param \Exception|null $exception
     */
    public function __construct(array $body, string $responseBody, int $code, array $headers, ?\Exception $exception)
    {
        $this->body = $body;
        $this->responseBody = $responseBody;
        $this->code = $code;
        $this->headers = $headers;
        $this->exception = $exception;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getResponseBody(): string
    {
        return $this->responseBody;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @return \Exception
     */
    public function getException(): \Exception
    {
        return $this->exception;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return !isset($this->exception) && $this->code >= 200 && $this->code < 300;
    }

    /**
     * @return bool
     */
    public function isFailed(): bool
    {
        return isset($this->exception);
    }

}