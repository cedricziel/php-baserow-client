<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateDatabaseTableViewFilterBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterViewFilterIdPatchResponse400
     */
    private $apiDatabaseViewsFilterViewFilterIdPatchResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterViewFilterIdPatchResponse400 $apiDatabaseViewsFilterViewFilterIdPatchResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseViewsFilterViewFilterIdPatchResponse400 = $apiDatabaseViewsFilterViewFilterIdPatchResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseViewsFilterViewFilterIdPatchResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterViewFilterIdPatchResponse400
    {
        return $this->apiDatabaseViewsFilterViewFilterIdPatchResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
