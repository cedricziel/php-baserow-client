<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetDatabaseTableViewFilterGroupBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterGroupFilterGroupIdGetResponse400
     */
    private $apiDatabaseViewsFilterGroupFilterGroupIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterGroupFilterGroupIdGetResponse400 $apiDatabaseViewsFilterGroupFilterGroupIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsFilterGroupFilterGroupIdGetResponse400 = $apiDatabaseViewsFilterGroupFilterGroupIdGetResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsFilterGroupFilterGroupIdGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterGroupFilterGroupIdGetResponse400
    {
        return $this->apiDatabaseViewsFilterGroupFilterGroupIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
