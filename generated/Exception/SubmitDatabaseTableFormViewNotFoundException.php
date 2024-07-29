<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class SubmitDatabaseTableFormViewNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFormSlugSubmitPostResponse404
     */
    private $apiDatabaseViewsFormSlugSubmitPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFormSlugSubmitPostResponse404 $apiDatabaseViewsFormSlugSubmitPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseViewsFormSlugSubmitPostResponse404 = $apiDatabaseViewsFormSlugSubmitPostResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseViewsFormSlugSubmitPostResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFormSlugSubmitPostResponse404
    {
        return $this->apiDatabaseViewsFormSlugSubmitPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
