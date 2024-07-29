<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class TokenVerifyWithUser extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Deprecated. Use `refresh_token` instead.
     *
     * @deprecated
     *
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $refreshToken;

    /**
     * Deprecated. Use `refresh_token` instead.
     *
     * @deprecated
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Deprecated. Use `refresh_token` instead.
     *
     * @deprecated
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(string $refreshToken): self
    {
        $this->initialized['refreshToken'] = true;
        $this->refreshToken = $refreshToken;

        return $this;
    }
}
