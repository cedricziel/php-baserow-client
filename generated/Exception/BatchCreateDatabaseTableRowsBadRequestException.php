<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class BatchCreateDatabaseTableRowsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdBatchPostResponse400
     */
    private $apiDatabaseRowsTableTableIdBatchPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdBatchPostResponse400 $apiDatabaseRowsTableTableIdBatchPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseRowsTableTableIdBatchPostResponse400 = $apiDatabaseRowsTableTableIdBatchPostResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseRowsTableTableIdBatchPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdBatchPostResponse400
    {
        return $this->apiDatabaseRowsTableTableIdBatchPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
