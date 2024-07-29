<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class PublicListDatabaseTableKanbanViewRowsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsKanbanSlugPublicRowsGetResponse401
     */
    private $apiDatabaseViewsKanbanSlugPublicRowsGetResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsKanbanSlugPublicRowsGetResponse401 $apiDatabaseViewsKanbanSlugPublicRowsGetResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiDatabaseViewsKanbanSlugPublicRowsGetResponse401 = $apiDatabaseViewsKanbanSlugPublicRowsGetResponse401;
        $this->response = $response;
    }

    public function getApiDatabaseViewsKanbanSlugPublicRowsGetResponse401(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsKanbanSlugPublicRowsGetResponse401
    {
        return $this->apiDatabaseViewsKanbanSlugPublicRowsGetResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
