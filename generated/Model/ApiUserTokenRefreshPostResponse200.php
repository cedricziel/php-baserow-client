<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class ApiUserTokenRefreshPostResponse200 extends \ArrayObject
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
     * An object containing information related to the user.
     *
     * @var ApiUserTokenRefreshPostResponse200User
     */
    protected $user;
    /**
     * Deprecated. Use the `access_token` instead.
     *
     * @deprecated
     *
     * @var string
     */
    protected $token;
    /**
     * 'access_token' can be used to authorize for other endpoints that require authorization. This token will be valid for 10 minutes.
     *
     * @var string
     */
    protected $accessToken;

    /**
     * An object containing information related to the user.
     */
    public function getUser(): ApiUserTokenRefreshPostResponse200User
    {
        return $this->user;
    }

    /**
     * An object containing information related to the user.
     */
    public function setUser(ApiUserTokenRefreshPostResponse200User $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    /**
     * Deprecated. Use the `access_token` instead.
     *
     * @deprecated
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Deprecated. Use the `access_token` instead.
     *
     * @deprecated
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    /**
     * 'access_token' can be used to authorize for other endpoints that require authorization. This token will be valid for 10 minutes.
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * 'access_token' can be used to authorize for other endpoints that require authorization. This token will be valid for 10 minutes.
     */
    public function setAccessToken(string $accessToken): self
    {
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;

        return $this;
    }
}
