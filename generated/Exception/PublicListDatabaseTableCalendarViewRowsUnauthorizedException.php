<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class PublicListDatabaseTableCalendarViewRowsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsCalendarSlugPublicRowsGetResponse401
     */
    private $apiDatabaseViewsCalendarSlugPublicRowsGetResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsCalendarSlugPublicRowsGetResponse401 $apiDatabaseViewsCalendarSlugPublicRowsGetResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiDatabaseViewsCalendarSlugPublicRowsGetResponse401 = $apiDatabaseViewsCalendarSlugPublicRowsGetResponse401;
        $this->response = $response;
    }

    public function getApiDatabaseViewsCalendarSlugPublicRowsGetResponse401(): \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsCalendarSlugPublicRowsGetResponse401
    {
        return $this->apiDatabaseViewsCalendarSlugPublicRowsGetResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
