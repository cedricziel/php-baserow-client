<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class VerifyEmailUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiUserVerifyEmailPostResponse401
     */
    private $apiUserVerifyEmailPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiUserVerifyEmailPostResponse401 $apiUserVerifyEmailPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiUserVerifyEmailPostResponse401 = $apiUserVerifyEmailPostResponse401;
        $this->response = $response;
    }

    public function getApiUserVerifyEmailPostResponse401(): \cedricziel\phpbaserowclient\Generated\Model\ApiUserVerifyEmailPostResponse401
    {
        return $this->apiUserVerifyEmailPostResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
