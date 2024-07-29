<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class CreateUserNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiUserPostResponse404
     */
    private $apiUserPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiUserPostResponse404 $apiUserPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiUserPostResponse404 = $apiUserPostResponse404;
        $this->response = $response;
    }

    public function getApiUserPostResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiUserPostResponse404
    {
        return $this->apiUserPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
