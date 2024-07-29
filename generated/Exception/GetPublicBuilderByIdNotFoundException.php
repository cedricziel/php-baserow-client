<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetPublicBuilderByIdNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsPublishedByIdBuilderIdGetResponse404
     */
    private $apiBuilderDomainsPublishedByIdBuilderIdGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsPublishedByIdBuilderIdGetResponse404 $apiBuilderDomainsPublishedByIdBuilderIdGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiBuilderDomainsPublishedByIdBuilderIdGetResponse404 = $apiBuilderDomainsPublishedByIdBuilderIdGetResponse404;
        $this->response = $response;
    }

    public function getApiBuilderDomainsPublishedByIdBuilderIdGetResponse404(): \CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsPublishedByIdBuilderIdGetResponse404
    {
        return $this->apiBuilderDomainsPublishedByIdBuilderIdGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
