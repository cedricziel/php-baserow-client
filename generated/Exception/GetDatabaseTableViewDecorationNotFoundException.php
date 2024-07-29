<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class GetDatabaseTableViewDecorationNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsDecorationViewDecorationIdGetResponse404
     */
    private $apiDatabaseViewsDecorationViewDecorationIdGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsDecorationViewDecorationIdGetResponse404 $apiDatabaseViewsDecorationViewDecorationIdGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseViewsDecorationViewDecorationIdGetResponse404 = $apiDatabaseViewsDecorationViewDecorationIdGetResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseViewsDecorationViewDecorationIdGetResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsDecorationViewDecorationIdGetResponse404
    {
        return $this->apiDatabaseViewsDecorationViewDecorationIdGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
