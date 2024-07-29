<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class DeleteDatabaseTableRowNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdRowIdDeleteResponse404
     */
    private $apiDatabaseRowsTableTableIdRowIdDeleteResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdRowIdDeleteResponse404 $apiDatabaseRowsTableTableIdRowIdDeleteResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseRowsTableTableIdRowIdDeleteResponse404 = $apiDatabaseRowsTableTableIdRowIdDeleteResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseRowsTableTableIdRowIdDeleteResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdRowIdDeleteResponse404
    {
        return $this->apiDatabaseRowsTableTableIdRowIdDeleteResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
