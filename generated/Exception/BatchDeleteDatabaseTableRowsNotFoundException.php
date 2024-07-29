<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class BatchDeleteDatabaseTableRowsNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchDeletePostResponse404
     */
    private $apiDatabaseRowsTableTableIdBatchDeletePostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchDeletePostResponse404 $apiDatabaseRowsTableTableIdBatchDeletePostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseRowsTableTableIdBatchDeletePostResponse404 = $apiDatabaseRowsTableTableIdBatchDeletePostResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseRowsTableTableIdBatchDeletePostResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchDeletePostResponse404
    {
        return $this->apiDatabaseRowsTableTableIdBatchDeletePostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
