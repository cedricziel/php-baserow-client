<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateApplicationBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiApplicationsApplicationIdPatchResponse400
     */
    private $apiApplicationsApplicationIdPatchResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiApplicationsApplicationIdPatchResponse400 $apiApplicationsApplicationIdPatchResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiApplicationsApplicationIdPatchResponse400 = $apiApplicationsApplicationIdPatchResponse400;
        $this->response = $response;
    }

    public function getApiApplicationsApplicationIdPatchResponse400(): \CedricZiel\Baserow\Generated\Model\ApiApplicationsApplicationIdPatchResponse400
    {
        return $this->apiApplicationsApplicationIdPatchResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
