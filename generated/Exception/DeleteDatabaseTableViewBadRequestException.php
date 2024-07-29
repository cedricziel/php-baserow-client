<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class DeleteDatabaseTableViewBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsViewIdDeleteResponse400
     */
    private $apiDatabaseViewsViewIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsViewIdDeleteResponse400 $apiDatabaseViewsViewIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsViewIdDeleteResponse400 = $apiDatabaseViewsViewIdDeleteResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsViewIdDeleteResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsViewIdDeleteResponse400
    {
        return $this->apiDatabaseViewsViewIdDeleteResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
