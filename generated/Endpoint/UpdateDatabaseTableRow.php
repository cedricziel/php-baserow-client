<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class UpdateDatabaseTableRow extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $row_id;
    protected $table_id;

    /**
     * Updates an existing row in the table if the user has access to the related table's workspace. The accepted body fields are depending on the fields that the table has. For a complete overview of fields use the **list_database_table_fields** endpoint to list them all. None of the fields are required, if they are not provided the value is not going to be updated. When you want to update a value for the field with id `10`, the key must be named `field_10`. Or if the GET parameter `user_field_names` is provided the key of the field to update must be the name of the field. Multiple different fields to update can be provided in one request. In the examples below you will find all the different field types, the numbers/ids in the example are just there for example purposes, the field_ID must be replaced with the actual id of the field or the name of the field if `user_field_names` is provided.
     *
     * @param int   $rowId           updates the row related to the value
     * @param int   $tableId         updates the row in the table related to the value
     * @param array $queryParameters {
     *
     * @var bool $user_field_names A flag query parameter which if provided this endpoint will expect and return the user specified field names instead of internal Baserow field names (field_123 etc).
     *           }
     *
     * @param array $headerParameters {
     *
     * @var string $ClientSessionId An optional header that marks the action performed by this request as having occurred in a particular client session. Then using the undo/redo endpoints with the same ClientSessionId header this action can be undone/redone.
     * @var string $ClientUndoRedoActionGroupId An optional header that marks the action performed by this request as having occurred in a particular action group.Then calling the undo/redo endpoint with the same ClientSessionId header, all the actions belonging to the same action group can be undone/redone together in a single API call.
     *             }
     */
    public function __construct(int $rowId, int $tableId, ?\CedricZiel\Baserow\Generated\Model\PatchedExampleUpdateRowRequestSerializerWithUserFieldNames $requestBody = null, array $queryParameters = [], array $headerParameters = [])
    {
        $this->row_id = $rowId;
        $this->table_id = $tableId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{row_id}', '{table_id}'], [$this->row_id, $this->table_id], '/api/database/rows/table/{table_id}/{row_id}/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\Baserow\Generated\Model\PatchedExampleUpdateRowRequestSerializerWithUserFieldNames) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \CedricZiel\Baserow\Generated\Model\PatchedExampleUpdateRowRequestSerializerWithUserFieldNames) {
            return [['Content-Type' => ['application/x-www-form-urlencoded']], http_build_query($serializer->normalize($this->body, 'json'))];
        }
        if ($this->body instanceof \CedricZiel\Baserow\Generated\Model\PatchedExampleUpdateRowRequestSerializerWithUserFieldNames) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }

            return [['Content-Type' => ['multipart/form-data; boundary="'.($bodyBuilder->getBoundary().'"')]], $bodyBuilder->build()];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['user_field_names']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('user_field_names', ['bool']);

        return $optionsResolver;
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
     * @return \CedricZiel\Baserow\Generated\Model\ExampleRowResponseSerializerWithUserFieldNames|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\UpdateDatabaseTableRowBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\UpdateDatabaseTableRowUnauthorizedException
     * @throws \CedricZiel\Baserow\Generated\Exception\UpdateDatabaseTableRowNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ExampleRowResponseSerializerWithUserFieldNames', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\UpdateDatabaseTableRowBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdRowIdPatchResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\UpdateDatabaseTableRowUnauthorizedException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdRowIdPatchResponse401', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\UpdateDatabaseTableRowNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdRowIdPatchResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT', 'Database token'];
    }
}
