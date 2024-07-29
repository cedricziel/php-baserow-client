<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class CreateDatabaseTableViewFilterGroupNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsViewIdFilterGroupsPostResponse404
     */
    private $apiDatabaseViewsViewIdFilterGroupsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsViewIdFilterGroupsPostResponse404 $apiDatabaseViewsViewIdFilterGroupsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseViewsViewIdFilterGroupsPostResponse404 = $apiDatabaseViewsViewIdFilterGroupsPostResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseViewsViewIdFilterGroupsPostResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsViewIdFilterGroupsPostResponse404
    {
        return $this->apiDatabaseViewsViewIdFilterGroupsPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
