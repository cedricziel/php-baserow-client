<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class DeleteDatabaseTable extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $table_id;

    /**
     * Deletes the existing table if the authorized user has access to the related database's workspace.
     *
     * @param int   $tableId          deletes the table related to the provided value
     * @param array $headerParameters {
     *
     * @var string $ClientSessionId An optional header that marks the action performed by this request as having occurred in a particular client session. Then using the undo/redo endpoints with the same ClientSessionId header this action can be undone/redone.
     * @var string $ClientUndoRedoActionGroupId An optional header that marks the action performed by this request as having occurred in a particular action group.Then calling the undo/redo endpoint with the same ClientSessionId header, all the actions belonging to the same action group can be undone/redone together in a single API call.
     *             }
     */
    public function __construct(int $tableId, array $headerParameters = [])
    {
        $this->table_id = $tableId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{table_id}'], [$this->table_id], '/api/database/tables/{table_id}/');
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
        $optionsResolver->setDefined(['ClientSessionId', 'ClientUndoRedoActionGroupId']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ClientSessionId', ['string']);
        $optionsResolver->addAllowedTypes('ClientUndoRedoActionGroupId', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\DeleteDatabaseTableBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\DeleteDatabaseTableNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\DeleteDatabaseTableBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesTableIdDeleteResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\DeleteDatabaseTableNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesTableIdDeleteResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
