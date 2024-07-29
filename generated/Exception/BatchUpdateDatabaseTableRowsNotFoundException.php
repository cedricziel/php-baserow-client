<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class BatchUpdateDatabaseTableRowsNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchPatchResponse404
     */
    private $apiDatabaseRowsTableTableIdBatchPatchResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchPatchResponse404 $apiDatabaseRowsTableTableIdBatchPatchResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseRowsTableTableIdBatchPatchResponse404 = $apiDatabaseRowsTableTableIdBatchPatchResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseRowsTableTableIdBatchPatchResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchPatchResponse404
    {
        return $this->apiDatabaseRowsTableTableIdBatchPatchResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
