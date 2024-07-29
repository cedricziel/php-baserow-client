<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class DuplicateBuilderPageAsync extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $page_id;

    /**
     * Start a job to duplicate the page with the provided `page_id` parameter if the authorized user has access to the builder's workspace.
     *
     * @param int   $pageId           the page to duplicate
     * @param array $headerParameters {
     *
     * @var string $ClientSessionId An optional header that marks the action performed by this request as having occurred in a particular client session. Then using the undo/redo endpoints with the same ClientSessionId header this action can be undone/redone.
     *             }
     */
    public function __construct(int $pageId, array $headerParameters = [])
    {
        $this->page_id = $pageId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{page_id}'], [$this->page_id], '/api/builder/pages/{page_id}/duplicate/async/');
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
     * @return \cedricziel\phpbaserowclient\Generated\Model\SingleDuplicatePageJobType|null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\DuplicateBuilderPageAsyncBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\DuplicateBuilderPageAsyncNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\SingleDuplicatePageJobType', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\DuplicateBuilderPageAsyncBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiBuilderPagesPageIdDuplicateAsyncPostResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\DuplicateBuilderPageAsyncNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiBuilderPagesPageIdDuplicateAsyncPostResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
