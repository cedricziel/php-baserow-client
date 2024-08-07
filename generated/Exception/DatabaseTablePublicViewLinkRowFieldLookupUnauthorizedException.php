<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class DatabaseTablePublicViewLinkRowFieldLookupUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsSlugLinkRowFieldLookupFieldIdGetResponse401
     */
    private $apiDatabaseViewsSlugLinkRowFieldLookupFieldIdGetResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsSlugLinkRowFieldLookupFieldIdGetResponse401 $apiDatabaseViewsSlugLinkRowFieldLookupFieldIdGetResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiDatabaseViewsSlugLinkRowFieldLookupFieldIdGetResponse401 = $apiDatabaseViewsSlugLinkRowFieldLookupFieldIdGetResponse401;
        $this->response = $response;
    }

    public function getApiDatabaseViewsSlugLinkRowFieldLookupFieldIdGetResponse401(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsSlugLinkRowFieldLookupFieldIdGetResponse401
    {
        return $this->apiDatabaseViewsSlugLinkRowFieldLookupFieldIdGetResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
