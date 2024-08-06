<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class BatchCreateDatabaseTableRows extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $table_id;

    /**
     * Creates new rows in the table if the user has access to the related table's workspace. The accepted body fields are depending on the fields that the table has. For a complete overview of fields use the **list_database_table_fields** to list them all. None of the fields are required, if they are not provided the value is going to be `null` or `false` or some default value is that is set. If you want to add a value for the field with for example id `10`, the key must be named `field_10`. Or instead if the `user_field_names` GET param is provided the key must be the name of the field. Of course multiple fields can be provided in one request. In the examples below you will find all the different field types, the numbers/ids in the example are just there for example purposes, the field_ID must be replaced with the actual id of the field or the name of the field if `user_field_names` is provided.
     **WARNING:** This endpoint doesn't yet work with row created webhooks.
     *
     * @param int   $tableId         creates the rows in the table
     * @param array $queryParameters {
     *
     * @var int  $before if provided then the newly created rows will be positioned before the row with the provided id
     * @var bool $user_field_names A flag query parameter which if provided this endpoint will expect and return the user specified field names instead of internal Baserow field names (field_123 etc).
     *           }
     *
     * @param array $headerParameters {
     *
     * @var string $ClientSessionId An optional header that marks the action performed by this request as having occurred in a particular client session. Then using the undo/redo endpoints with the same ClientSessionId header this action can be undone/redone.
     * @var string $ClientUndoRedoActionGroupId An optional header that marks the action performed by this request as having occurred in a particular action group.Then calling the undo/redo endpoint with the same ClientSessionId header, all the actions belonging to the same action group can be undone/redone together in a single API call.
     *             }
     */
    public function __construct(int $tableId, \CedricZiel\Baserow\Generated\Model\BatchCreateRowRequest $requestBody, array $queryParameters = [], array $headerParameters = [])
    {
        $this->table_id = $tableId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{table_id}'], [$this->table_id], '/api/database/rows/table/{table_id}/batch/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\Baserow\Generated\Model\BatchCreateRowRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \CedricZiel\Baserow\Generated\Model\BatchCreateRowRequest) {
            return [['Content-Type' => ['application/x-www-form-urlencoded']], http_build_query($serializer->normalize($this->body, 'json'))];
        }
        if ($this->body instanceof \CedricZiel\Baserow\Generated\Model\BatchCreateRowRequest) {
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
        $optionsResolver->setDefined(['before', 'user_field_names']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('before', ['int']);
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
     * @return \CedricZiel\Baserow\Generated\Model\ExampleBatchRowsResponse|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\BatchCreateDatabaseTableRowsBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\BatchCreateDatabaseTableRowsUnauthorizedException
     * @throws \CedricZiel\Baserow\Generated\Exception\BatchCreateDatabaseTableRowsNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ExampleBatchRowsResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\BatchCreateDatabaseTableRowsBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdBatchPostResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\BatchCreateDatabaseTableRowsUnauthorizedException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdBatchPostResponse401', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\BatchCreateDatabaseTableRowsNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsTableTableIdBatchPostResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT', 'Database token'];
    }
}
