<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class CreateApplicationIntegrationBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiApplicationApplicationIdIntegrationsPostResponse400
     */
    private $apiApplicationApplicationIdIntegrationsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiApplicationApplicationIdIntegrationsPostResponse400 $apiApplicationApplicationIdIntegrationsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiApplicationApplicationIdIntegrationsPostResponse400 = $apiApplicationApplicationIdIntegrationsPostResponse400;
        $this->response = $response;
    }

    public function getApiApplicationApplicationIdIntegrationsPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiApplicationApplicationIdIntegrationsPostResponse400
    {
        return $this->apiApplicationApplicationIdIntegrationsPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
