<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class BatchUpdateDatabaseTableRowsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchPatchResponse400
     */
    private $apiDatabaseRowsTableTableIdBatchPatchResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchPatchResponse400 $apiDatabaseRowsTableTableIdBatchPatchResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseRowsTableTableIdBatchPatchResponse400 = $apiDatabaseRowsTableTableIdBatchPatchResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseRowsTableTableIdBatchPatchResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseRowsTableTableIdBatchPatchResponse400
    {
        return $this->apiDatabaseRowsTableTableIdBatchPatchResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
