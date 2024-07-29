<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class PublicViewTokenAuthNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsSlugPublicAuthPostResponse404
     */
    private $apiDatabaseViewsSlugPublicAuthPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsSlugPublicAuthPostResponse404 $apiDatabaseViewsSlugPublicAuthPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseViewsSlugPublicAuthPostResponse404 = $apiDatabaseViewsSlugPublicAuthPostResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseViewsSlugPublicAuthPostResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsSlugPublicAuthPostResponse404
    {
        return $this->apiDatabaseViewsSlugPublicAuthPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
