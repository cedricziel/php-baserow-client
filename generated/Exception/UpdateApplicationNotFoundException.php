<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class UpdateApplicationNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsApplicationIdPatchResponse404
     */
    private $apiApplicationsApplicationIdPatchResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsApplicationIdPatchResponse404 $apiApplicationsApplicationIdPatchResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiApplicationsApplicationIdPatchResponse404 = $apiApplicationsApplicationIdPatchResponse404;
        $this->response = $response;
    }

    public function getApiApplicationsApplicationIdPatchResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsApplicationIdPatchResponse404
    {
        return $this->apiApplicationsApplicationIdPatchResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
