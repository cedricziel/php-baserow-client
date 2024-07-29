<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class TokenRefreshUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiUserTokenRefreshPostResponse401
     */
    private $apiUserTokenRefreshPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiUserTokenRefreshPostResponse401 $apiUserTokenRefreshPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiUserTokenRefreshPostResponse401 = $apiUserTokenRefreshPostResponse401;
        $this->response = $response;
    }

    public function getApiUserTokenRefreshPostResponse401(): \CedricZiel\Baserow\Generated\Model\ApiUserTokenRefreshPostResponse401
    {
        return $this->apiUserTokenRefreshPostResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
