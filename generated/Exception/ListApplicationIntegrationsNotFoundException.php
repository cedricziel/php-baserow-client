<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class ListApplicationIntegrationsNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiApplicationApplicationIdIntegrationsGetResponse404
     */
    private $apiApplicationApplicationIdIntegrationsGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiApplicationApplicationIdIntegrationsGetResponse404 $apiApplicationApplicationIdIntegrationsGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiApplicationApplicationIdIntegrationsGetResponse404 = $apiApplicationApplicationIdIntegrationsGetResponse404;
        $this->response = $response;
    }

    public function getApiApplicationApplicationIdIntegrationsGetResponse404(): \CedricZiel\Baserow\Generated\Model\ApiApplicationApplicationIdIntegrationsGetResponse404
    {
        return $this->apiApplicationApplicationIdIntegrationsGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
