<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class TestCallDatabaseTableWebhookBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseWebhooksTableTableIdTestCallPostResponse400
     */
    private $apiDatabaseWebhooksTableTableIdTestCallPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseWebhooksTableTableIdTestCallPostResponse400 $apiDatabaseWebhooksTableTableIdTestCallPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseWebhooksTableTableIdTestCallPostResponse400 = $apiDatabaseWebhooksTableTableIdTestCallPostResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseWebhooksTableTableIdTestCallPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseWebhooksTableTableIdTestCallPostResponse400
    {
        return $this->apiDatabaseWebhooksTableTableIdTestCallPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
