<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class FilterDatabaseTableGridViewRowsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridViewIdPostResponse400
     */
    private $apiDatabaseViewsGridViewIdPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridViewIdPostResponse400 $apiDatabaseViewsGridViewIdPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsGridViewIdPostResponse400 = $apiDatabaseViewsGridViewIdPostResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsGridViewIdPostResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridViewIdPostResponse400
    {
        return $this->apiDatabaseViewsGridViewIdPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
