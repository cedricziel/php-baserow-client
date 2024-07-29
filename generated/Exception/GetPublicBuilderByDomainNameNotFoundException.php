<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class GetPublicBuilderByDomainNameNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiBuilderDomainsPublishedByNameDomainNameGetResponse404
     */
    private $apiBuilderDomainsPublishedByNameDomainNameGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiBuilderDomainsPublishedByNameDomainNameGetResponse404 $apiBuilderDomainsPublishedByNameDomainNameGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiBuilderDomainsPublishedByNameDomainNameGetResponse404 = $apiBuilderDomainsPublishedByNameDomainNameGetResponse404;
        $this->response = $response;
    }

    public function getApiBuilderDomainsPublishedByNameDomainNameGetResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiBuilderDomainsPublishedByNameDomainNameGetResponse404
    {
        return $this->apiBuilderDomainsPublishedByNameDomainNameGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
