<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class GetRowComments extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $row_id;
    protected $table_id;

    /**
     * Returns all row comments for the specified table and row.
     *
     * This is a **premium** feature.
     *
     * @param int   $rowId           the row to get row comments for
     * @param int   $tableId         the table the row is in
     * @param array $queryParameters {
     *
     * @var int $limit defines how many rows should be returned
     * @var int $offset can only be used in combination with the `limit` parameter and defines from which offset the rows should be returned
     * @var int $page Defines which page of rows should be returned. Either the `page` or `limit` can be provided, not both.
     * @var int $size Can only be used in combination with the `page` parameter and defines how many rows should be returned.
     *          }
     */
    public function __construct(int $rowId, int $tableId, array $queryParameters = [])
    {
        $this->row_id = $rowId;
        $this->table_id = $tableId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{row_id}', '{table_id}'], [$this->row_id, $this->table_id], '/api/row_comments/{table_id}/{row_id}/');
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
        $optionsResolver->setDefined(['limit', 'offset', 'page', 'size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('size', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \cedricziel\phpbaserowclient\Generated\Model\PaginationSerializerRowComment|null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\GetRowCommentsBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\GetRowCommentsNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\PaginationSerializerRowComment', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\GetRowCommentsBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiRowCommentsTableIdRowIdGetResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\GetRowCommentsNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiRowCommentsTableIdRowIdGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
