<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class PublishBuilderDomain extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $domain_id;

    /**
     * This endpoint starts an asynchronous job to publish the builder. The job clones the current version of the given builder and publish it for the given domain.
     *
     * @param int   $domainId         the builder application id the user wants to publish
     * @param array $headerParameters {
     *
     * @var string $ClientSessionId An optional header that marks the action performed by this request as having occurred in a particular client session. Then using the undo/redo endpoints with the same ClientSessionId header this action can be undone/redone.
     *             }
     */
    public function __construct(int $domainId, array $headerParameters = [])
    {
        $this->domain_id = $domainId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{domain_id}'], [$this->domain_id], '/api/builder/domains/{domain_id}/publish/async/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['ClientSessionId']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ClientSessionId', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\PublishBuilderDomainBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\PublishBuilderDomainNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\PublishBuilderDomainBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsDomainIdPublishAsyncPostResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\PublishBuilderDomainNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiBuilderDomainsDomainIdPublishAsyncPostResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
