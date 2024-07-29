<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class DeleteRowComment extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $comment_id;
    protected $table_id;

    /**
     * Delete a row comment.
     *
     * This is a **premium** feature.
     *
     * @param int $commentId the row comment to delete
     * @param int $tableId   the table the row is in
     */
    public function __construct(int $commentId, int $tableId)
    {
        $this->comment_id = $commentId;
        $this->table_id = $tableId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{comment_id}', '{table_id}'], [$this->comment_id, $this->table_id], '/api/row_comments/{table_id}/comment/{comment_id}/');
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
     * @return \cedricziel\phpbaserowclient\Generated\Model\RowComment|null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\DeleteRowCommentBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\DeleteRowCommentUnauthorizedException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\DeleteRowCommentNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\RowComment', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\DeleteRowCommentBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiRowCommentsTableIdCommentCommentIdDeleteResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\DeleteRowCommentUnauthorizedException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiRowCommentsTableIdCommentCommentIdDeleteResponse401', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\DeleteRowCommentNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiRowCommentsTableIdCommentCommentIdDeleteResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
