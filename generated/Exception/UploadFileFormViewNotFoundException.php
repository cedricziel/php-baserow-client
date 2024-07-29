<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class UploadFileFormViewNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsFormSlugUploadFilePostResponse404
     */
    private $apiDatabaseViewsFormSlugUploadFilePostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsFormSlugUploadFilePostResponse404 $apiDatabaseViewsFormSlugUploadFilePostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseViewsFormSlugUploadFilePostResponse404 = $apiDatabaseViewsFormSlugUploadFilePostResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseViewsFormSlugUploadFilePostResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsFormSlugUploadFilePostResponse404
    {
        return $this->apiDatabaseViewsFormSlugUploadFilePostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
