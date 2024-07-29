<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class ListDatabaseTableGalleryViewRowsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGalleryViewIdGetResponse400
     */
    private $apiDatabaseViewsGalleryViewIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGalleryViewIdGetResponse400 $apiDatabaseViewsGalleryViewIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsGalleryViewIdGetResponse400 = $apiDatabaseViewsGalleryViewIdGetResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsGalleryViewIdGetResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGalleryViewIdGetResponse400
    {
        return $this->apiDatabaseViewsGalleryViewIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
