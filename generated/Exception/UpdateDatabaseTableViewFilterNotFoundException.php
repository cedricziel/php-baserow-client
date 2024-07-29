<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateDatabaseTableViewFilterNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterViewFilterIdPatchResponse404
     */
    private $apiDatabaseViewsFilterViewFilterIdPatchResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterViewFilterIdPatchResponse404 $apiDatabaseViewsFilterViewFilterIdPatchResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseViewsFilterViewFilterIdPatchResponse404 = $apiDatabaseViewsFilterViewFilterIdPatchResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseViewsFilterViewFilterIdPatchResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsFilterViewFilterIdPatchResponse404
    {
        return $this->apiDatabaseViewsFilterViewFilterIdPatchResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
