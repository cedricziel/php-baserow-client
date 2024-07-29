<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class ListDatabaseTableWebhooksBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseWebhooksTableTableIdGetResponse400
     */
    private $apiDatabaseWebhooksTableTableIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseWebhooksTableTableIdGetResponse400 $apiDatabaseWebhooksTableTableIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseWebhooksTableTableIdGetResponse400 = $apiDatabaseWebhooksTableTableIdGetResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseWebhooksTableTableIdGetResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseWebhooksTableTableIdGetResponse400
    {
        return $this->apiDatabaseWebhooksTableTableIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
