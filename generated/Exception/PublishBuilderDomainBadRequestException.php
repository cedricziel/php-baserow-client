<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class PublishBuilderDomainBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsDomainIdPublishAsyncPostResponse400
     */
    private $apiBuilderDomainsDomainIdPublishAsyncPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsDomainIdPublishAsyncPostResponse400 $apiBuilderDomainsDomainIdPublishAsyncPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiBuilderDomainsDomainIdPublishAsyncPostResponse400 = $apiBuilderDomainsDomainIdPublishAsyncPostResponse400;
        $this->response = $response;
    }

    public function getApiBuilderDomainsDomainIdPublishAsyncPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsDomainIdPublishAsyncPostResponse400
    {
        return $this->apiBuilderDomainsDomainIdPublishAsyncPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
