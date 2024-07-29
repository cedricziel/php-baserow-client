<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateDatabaseTokenNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseTokensTokenIdPatchResponse404
     */
    private $apiDatabaseTokensTokenIdPatchResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseTokensTokenIdPatchResponse404 $apiDatabaseTokensTokenIdPatchResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseTokensTokenIdPatchResponse404 = $apiDatabaseTokensTokenIdPatchResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseTokensTokenIdPatchResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseTokensTokenIdPatchResponse404
    {
        return $this->apiDatabaseTokensTokenIdPatchResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
