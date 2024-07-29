<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class CreateDatabaseTableViewSortBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsViewIdSortingsPostResponse400
     */
    private $apiDatabaseViewsViewIdSortingsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsViewIdSortingsPostResponse400 $apiDatabaseViewsViewIdSortingsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsViewIdSortingsPostResponse400 = $apiDatabaseViewsViewIdSortingsPostResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsViewIdSortingsPostResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsViewIdSortingsPostResponse400
    {
        return $this->apiDatabaseViewsViewIdSortingsPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
