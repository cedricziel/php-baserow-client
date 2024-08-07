<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class DeleteApplicationBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiApplicationsApplicationIdDeleteResponse400
     */
    private $apiApplicationsApplicationIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiApplicationsApplicationIdDeleteResponse400 $apiApplicationsApplicationIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiApplicationsApplicationIdDeleteResponse400 = $apiApplicationsApplicationIdDeleteResponse400;
        $this->response = $response;
    }

    public function getApiApplicationsApplicationIdDeleteResponse400(): \CedricZiel\Baserow\Generated\Model\ApiApplicationsApplicationIdDeleteResponse400
    {
        return $this->apiApplicationsApplicationIdDeleteResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
