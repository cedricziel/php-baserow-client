<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetDatabaseTablePublicGridViewFieldAggregationsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsGridSlugPublicAggregationsGetResponse401
     */
    private $apiDatabaseViewsGridSlugPublicAggregationsGetResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsGridSlugPublicAggregationsGetResponse401 $apiDatabaseViewsGridSlugPublicAggregationsGetResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiDatabaseViewsGridSlugPublicAggregationsGetResponse401 = $apiDatabaseViewsGridSlugPublicAggregationsGetResponse401;
        $this->response = $response;
    }

    public function getApiDatabaseViewsGridSlugPublicAggregationsGetResponse401(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsGridSlugPublicAggregationsGetResponse401
    {
        return $this->apiDatabaseViewsGridSlugPublicAggregationsGetResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
