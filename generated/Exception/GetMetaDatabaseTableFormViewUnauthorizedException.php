<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetMetaDatabaseTableFormViewUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFormSlugSubmitGetResponse401
     */
    private $apiDatabaseViewsFormSlugSubmitGetResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFormSlugSubmitGetResponse401 $apiDatabaseViewsFormSlugSubmitGetResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiDatabaseViewsFormSlugSubmitGetResponse401 = $apiDatabaseViewsFormSlugSubmitGetResponse401;
        $this->response = $response;
    }

    public function getApiDatabaseViewsFormSlugSubmitGetResponse401(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFormSlugSubmitGetResponse401
    {
        return $this->apiDatabaseViewsFormSlugSubmitGetResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
