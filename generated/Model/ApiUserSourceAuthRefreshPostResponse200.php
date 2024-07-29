<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class ApiUserSourceAuthRefreshPostResponse200 extends \ArrayObject
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
     * 'access_token' can be used to authorize for other endpoints that require authorization. This token will be valid for 10 minutes.
     *
     * @var string
     */
    protected $accessToken;

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
