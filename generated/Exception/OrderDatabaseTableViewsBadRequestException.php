<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class OrderDatabaseTableViewsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsTableTableIdOrderPostResponse400
     */
    private $apiDatabaseViewsTableTableIdOrderPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsTableTableIdOrderPostResponse400 $apiDatabaseViewsTableTableIdOrderPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsTableTableIdOrderPostResponse400 = $apiDatabaseViewsTableTableIdOrderPostResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsTableTableIdOrderPostResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsTableTableIdOrderPostResponse400
    {
        return $this->apiDatabaseViewsTableTableIdOrderPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
