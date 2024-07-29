<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class DeleteDatabaseTableViewGroupBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGroupByViewGroupByIdDeleteResponse400
     */
    private $apiDatabaseViewsGroupByViewGroupByIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGroupByViewGroupByIdDeleteResponse400 $apiDatabaseViewsGroupByViewGroupByIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsGroupByViewGroupByIdDeleteResponse400 = $apiDatabaseViewsGroupByViewGroupByIdDeleteResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsGroupByViewGroupByIdDeleteResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGroupByViewGroupByIdDeleteResponse400
    {
        return $this->apiDatabaseViewsGroupByViewGroupByIdDeleteResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
