<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class ListDatabaseTables extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $database_id;

    /**
     * Lists all the tables that are in the database related to the `database_id` parameter if the user has access to the database's workspace. A table is exactly as the name suggests. It can hold multiple fields, each having their own type and multiple rows. They can be added via the **create_database_table_field** and **create_database_table_row** endpoints.
     *
     * @param int $databaseId returns only tables that are related to the provided value
     */
    public function __construct(int $databaseId)
    {
        $this->database_id = $databaseId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{database_id}'], [$this->database_id], '/api/database/tables/database/{database_id}/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \cedricziel\phpbaserowclient\Generated\Model\Table[]|null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\ListDatabaseTablesBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\ListDatabaseTablesNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\Table[]', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\ListDatabaseTablesBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesDatabaseDatabaseIdGetResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\ListDatabaseTablesNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseTablesDatabaseDatabaseIdGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
