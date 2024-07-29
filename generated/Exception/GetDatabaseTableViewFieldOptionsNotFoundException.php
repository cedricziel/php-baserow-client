<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetDatabaseTableViewFieldOptionsNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsViewIdFieldOptionsGetResponse404
     */
    private $apiDatabaseViewsViewIdFieldOptionsGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsViewIdFieldOptionsGetResponse404 $apiDatabaseViewsViewIdFieldOptionsGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseViewsViewIdFieldOptionsGetResponse404 = $apiDatabaseViewsViewIdFieldOptionsGetResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseViewsViewIdFieldOptionsGetResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsViewIdFieldOptionsGetResponse404
    {
        return $this->apiDatabaseViewsViewIdFieldOptionsGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
