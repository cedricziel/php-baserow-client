<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class GetDatabaseToken extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $token_id;

    /**
     * Returns the requested database token if it is owned by the authorized user andif the user has access to the related workspace.
     *
     * @param int $tokenId returns the database token related to the provided value
     */
    public function __construct(int $tokenId)
    {
        $this->token_id = $tokenId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{token_id}'], [$this->token_id], '/api/database/tokens/{token_id}/');
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
     * @return \CedricZiel\Baserow\Generated\Model\Token|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\GetDatabaseTokenBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\GetDatabaseTokenNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\Token', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\GetDatabaseTokenBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseTokensTokenIdGetResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\GetDatabaseTokenNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseTokensTokenIdGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
