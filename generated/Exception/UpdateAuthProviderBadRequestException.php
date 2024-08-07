<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateAuthProviderBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiAdminAuthProviderAuthProviderIdPatchResponse400
     */
    private $apiAdminAuthProviderAuthProviderIdPatchResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiAdminAuthProviderAuthProviderIdPatchResponse400 $apiAdminAuthProviderAuthProviderIdPatchResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiAdminAuthProviderAuthProviderIdPatchResponse400 = $apiAdminAuthProviderAuthProviderIdPatchResponse400;
        $this->response = $response;
    }

    public function getApiAdminAuthProviderAuthProviderIdPatchResponse400(): \CedricZiel\Baserow\Generated\Model\ApiAdminAuthProviderAuthProviderIdPatchResponse400
    {
        return $this->apiAdminAuthProviderAuthProviderIdPatchResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
