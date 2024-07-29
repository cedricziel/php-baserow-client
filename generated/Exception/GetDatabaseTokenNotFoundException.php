<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetDatabaseTokenNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseTokensTokenIdGetResponse404
     */
    private $apiDatabaseTokensTokenIdGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseTokensTokenIdGetResponse404 $apiDatabaseTokensTokenIdGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseTokensTokenIdGetResponse404 = $apiDatabaseTokensTokenIdGetResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseTokensTokenIdGetResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseTokensTokenIdGetResponse404
    {
        return $this->apiDatabaseTokensTokenIdGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
