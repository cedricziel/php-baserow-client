<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetDatabaseTableRowUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdRowIdGetResponse401
     */
    private $apiDatabaseRowsTableTableIdRowIdGetResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdRowIdGetResponse401 $apiDatabaseRowsTableTableIdRowIdGetResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiDatabaseRowsTableTableIdRowIdGetResponse401 = $apiDatabaseRowsTableTableIdRowIdGetResponse401;
        $this->response = $response;
    }

    public function getApiDatabaseRowsTableTableIdRowIdGetResponse401(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdRowIdGetResponse401
    {
        return $this->apiDatabaseRowsTableTableIdRowIdGetResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
