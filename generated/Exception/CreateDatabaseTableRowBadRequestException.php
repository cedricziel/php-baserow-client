<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class CreateDatabaseTableRowBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdPostResponse400
     */
    private $apiDatabaseRowsTableTableIdPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdPostResponse400 $apiDatabaseRowsTableTableIdPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseRowsTableTableIdPostResponse400 = $apiDatabaseRowsTableTableIdPostResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseRowsTableTableIdPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdPostResponse400
    {
        return $this->apiDatabaseRowsTableTableIdPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
