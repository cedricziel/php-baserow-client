<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class GetDatabaseTablePublicGridViewFieldAggregationsNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridSlugPublicAggregationsGetResponse404
     */
    private $apiDatabaseViewsGridSlugPublicAggregationsGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridSlugPublicAggregationsGetResponse404 $apiDatabaseViewsGridSlugPublicAggregationsGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseViewsGridSlugPublicAggregationsGetResponse404 = $apiDatabaseViewsGridSlugPublicAggregationsGetResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseViewsGridSlugPublicAggregationsGetResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridSlugPublicAggregationsGetResponse404
    {
        return $this->apiDatabaseViewsGridSlugPublicAggregationsGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
