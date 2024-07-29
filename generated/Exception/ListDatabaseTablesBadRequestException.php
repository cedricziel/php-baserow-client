<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class ListDatabaseTablesBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesDatabaseDatabaseIdGetResponse400
     */
    private $apiDatabaseTablesDatabaseDatabaseIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesDatabaseDatabaseIdGetResponse400 $apiDatabaseTablesDatabaseDatabaseIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseTablesDatabaseDatabaseIdGetResponse400 = $apiDatabaseTablesDatabaseDatabaseIdGetResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseTablesDatabaseDatabaseIdGetResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesDatabaseDatabaseIdGetResponse400
    {
        return $this->apiDatabaseTablesDatabaseDatabaseIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
