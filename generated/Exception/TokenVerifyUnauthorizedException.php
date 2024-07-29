<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class TokenVerifyUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiUserTokenVerifyPostResponse401
     */
    private $apiUserTokenVerifyPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiUserTokenVerifyPostResponse401 $apiUserTokenVerifyPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiUserTokenVerifyPostResponse401 = $apiUserTokenVerifyPostResponse401;
        $this->response = $response;
    }

    public function getApiUserTokenVerifyPostResponse401(): \CedricZiel\Baserow\Generated\Model\ApiUserTokenVerifyPostResponse401
    {
        return $this->apiUserTokenVerifyPostResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
