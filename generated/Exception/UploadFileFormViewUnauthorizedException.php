<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UploadFileFormViewUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFormSlugUploadFilePostResponse401
     */
    private $apiDatabaseViewsFormSlugUploadFilePostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFormSlugUploadFilePostResponse401 $apiDatabaseViewsFormSlugUploadFilePostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiDatabaseViewsFormSlugUploadFilePostResponse401 = $apiDatabaseViewsFormSlugUploadFilePostResponse401;
        $this->response = $response;
    }

    public function getApiDatabaseViewsFormSlugUploadFilePostResponse401(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFormSlugUploadFilePostResponse401
    {
        return $this->apiDatabaseViewsFormSlugUploadFilePostResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
