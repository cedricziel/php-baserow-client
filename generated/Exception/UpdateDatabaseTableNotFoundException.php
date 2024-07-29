<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class UpdateDatabaseTableNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesTableIdPatchResponse404
     */
    private $apiDatabaseTablesTableIdPatchResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesTableIdPatchResponse404 $apiDatabaseTablesTableIdPatchResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseTablesTableIdPatchResponse404 = $apiDatabaseTablesTableIdPatchResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseTablesTableIdPatchResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesTableIdPatchResponse404
    {
        return $this->apiDatabaseTablesTableIdPatchResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
