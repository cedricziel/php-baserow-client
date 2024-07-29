<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class ListDatabaseTableRowNamesNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsNamesGetResponse404
     */
    private $apiDatabaseRowsNamesGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsNamesGetResponse404 $apiDatabaseRowsNamesGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseRowsNamesGetResponse404 = $apiDatabaseRowsNamesGetResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseRowsNamesGetResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsNamesGetResponse404
    {
        return $this->apiDatabaseRowsNamesGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
