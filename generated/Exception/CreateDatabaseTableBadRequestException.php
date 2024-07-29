<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class CreateDatabaseTableBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseTablesDatabaseDatabaseIdPostResponse400
     */
    private $apiDatabaseTablesDatabaseDatabaseIdPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseTablesDatabaseDatabaseIdPostResponse400 $apiDatabaseTablesDatabaseDatabaseIdPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseTablesDatabaseDatabaseIdPostResponse400 = $apiDatabaseTablesDatabaseDatabaseIdPostResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseTablesDatabaseDatabaseIdPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseTablesDatabaseDatabaseIdPostResponse400
    {
        return $this->apiDatabaseTablesDatabaseDatabaseIdPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
