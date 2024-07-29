<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class PublicListDatabaseTableGridViewRowsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsGridSlugPublicRowsGetResponse401
     */
    private $apiDatabaseViewsGridSlugPublicRowsGetResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsGridSlugPublicRowsGetResponse401 $apiDatabaseViewsGridSlugPublicRowsGetResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiDatabaseViewsGridSlugPublicRowsGetResponse401 = $apiDatabaseViewsGridSlugPublicRowsGetResponse401;
        $this->response = $response;
    }

    public function getApiDatabaseViewsGridSlugPublicRowsGetResponse401(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsGridSlugPublicRowsGetResponse401
    {
        return $this->apiDatabaseViewsGridSlugPublicRowsGetResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
