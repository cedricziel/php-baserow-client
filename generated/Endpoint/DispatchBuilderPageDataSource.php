<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class DispatchBuilderPageDataSource extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $data_source_id;

    /**
     * Dispatches the service of the related data_source and returns the result.
     *
     * @param int   $dataSourceId     The id of the data_source you want to call the dispatch for
     * @param array $headerParameters {
     *
     * @var string $ClientSessionId An optional header that marks the action performed by this request as having occurred in a particular client session. Then using the undo/redo endpoints with the same ClientSessionId header this action can be undone/redone.
     *             }
     */
    public function __construct(int $dataSourceId, array $headerParameters = [])
    {
        $this->data_source_id = $dataSourceId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{data_source_id}'], [$this->data_source_id], '/api/builder/data-source/{data_source_id}/dispatch/');
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
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\DispatchBuilderPageDataSourceNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\DispatchBuilderPageDataSourceNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiBuilderDataSourceDataSourceIdDispatchPostResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
