<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class ListApplicationUserSourcesNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationApplicationIdUserSourcesGetResponse404
     */
    private $apiApplicationApplicationIdUserSourcesGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiApplicationApplicationIdUserSourcesGetResponse404 $apiApplicationApplicationIdUserSourcesGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiApplicationApplicationIdUserSourcesGetResponse404 = $apiApplicationApplicationIdUserSourcesGetResponse404;
        $this->response = $response;
    }

    public function getApiApplicationApplicationIdUserSourcesGetResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationApplicationIdUserSourcesGetResponse404
    {
        return $this->apiApplicationApplicationIdUserSourcesGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
