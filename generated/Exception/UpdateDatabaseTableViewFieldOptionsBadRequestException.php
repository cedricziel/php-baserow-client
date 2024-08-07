<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateDatabaseTableViewFieldOptionsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsViewIdFieldOptionsPatchResponse400
     */
    private $apiDatabaseViewsViewIdFieldOptionsPatchResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsViewIdFieldOptionsPatchResponse400 $apiDatabaseViewsViewIdFieldOptionsPatchResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsViewIdFieldOptionsPatchResponse400 = $apiDatabaseViewsViewIdFieldOptionsPatchResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsViewIdFieldOptionsPatchResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsViewIdFieldOptionsPatchResponse400
    {
        return $this->apiDatabaseViewsViewIdFieldOptionsPatchResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
