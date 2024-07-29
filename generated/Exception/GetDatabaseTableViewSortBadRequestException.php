<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetDatabaseTableViewSortBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsSortViewSortIdGetResponse400
     */
    private $apiDatabaseViewsSortViewSortIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsSortViewSortIdGetResponse400 $apiDatabaseViewsSortViewSortIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsSortViewSortIdGetResponse400 = $apiDatabaseViewsSortViewSortIdGetResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsSortViewSortIdGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsSortViewSortIdGetResponse400
    {
        return $this->apiDatabaseViewsSortViewSortIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
