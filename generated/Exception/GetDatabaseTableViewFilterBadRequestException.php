<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetDatabaseTableViewFilterBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterViewFilterIdGetResponse400
     */
    private $apiDatabaseViewsFilterViewFilterIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterViewFilterIdGetResponse400 $apiDatabaseViewsFilterViewFilterIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsFilterViewFilterIdGetResponse400 = $apiDatabaseViewsFilterViewFilterIdGetResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsFilterViewFilterIdGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterViewFilterIdGetResponse400
    {
        return $this->apiDatabaseViewsFilterViewFilterIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
