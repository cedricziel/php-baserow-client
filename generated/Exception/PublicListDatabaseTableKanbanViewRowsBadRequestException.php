<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class PublicListDatabaseTableKanbanViewRowsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsKanbanSlugPublicRowsGetResponse400
     */
    private $apiDatabaseViewsKanbanSlugPublicRowsGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsKanbanSlugPublicRowsGetResponse400 $apiDatabaseViewsKanbanSlugPublicRowsGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsKanbanSlugPublicRowsGetResponse400 = $apiDatabaseViewsKanbanSlugPublicRowsGetResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsKanbanSlugPublicRowsGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsKanbanSlugPublicRowsGetResponse400
    {
        return $this->apiDatabaseViewsKanbanSlugPublicRowsGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
