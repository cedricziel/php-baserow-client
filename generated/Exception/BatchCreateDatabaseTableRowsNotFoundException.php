<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class BatchCreateDatabaseTableRowsNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchPostResponse404
     */
    private $apiDatabaseRowsTableTableIdBatchPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchPostResponse404 $apiDatabaseRowsTableTableIdBatchPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseRowsTableTableIdBatchPostResponse404 = $apiDatabaseRowsTableTableIdBatchPostResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseRowsTableTableIdBatchPostResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchPostResponse404
    {
        return $this->apiDatabaseRowsTableTableIdBatchPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
