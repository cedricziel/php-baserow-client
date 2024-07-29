<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class ListDatabaseTableRowNames extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;

    /**
     * Returns the names of the given row of the given tables. The nameof a row is the primary field value for this row. The result can be usedfor example, when you want to display the name of a linked row from another table.
     *
     * @param array $queryParameters {
     *
     * @var string $table__{id} A list of comma separated row ids to query from the table with id {id}. For example, if you want the name of row `42` and `43` from table `28` this parameter will be `table__28=42,43`. You can specify multiple rows for different tables but every tables must be in the same database. You need at least read permission on all specified tables.
     *             }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/api/database/rows/names/';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['table__{id}']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('table__{id}', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsNamesGetResponse200|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableRowNamesBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableRowNamesUnauthorizedException
     * @throws \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableRowNamesNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsNamesGetResponse200', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableRowNamesBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsNamesGetResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableRowNamesUnauthorizedException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsNamesGetResponse401', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableRowNamesNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseRowsNamesGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT', 'Database token'];
    }
}
