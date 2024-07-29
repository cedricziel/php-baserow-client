<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateBuilderDomainBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsDomainIdPatchResponse400
     */
    private $apiBuilderDomainsDomainIdPatchResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsDomainIdPatchResponse400 $apiBuilderDomainsDomainIdPatchResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiBuilderDomainsDomainIdPatchResponse400 = $apiBuilderDomainsDomainIdPatchResponse400;
        $this->response = $response;
    }

    public function getApiBuilderDomainsDomainIdPatchResponse400(): \CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsDomainIdPatchResponse400
    {
        return $this->apiBuilderDomainsDomainIdPatchResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
