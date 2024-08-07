<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class UpdateAuthProvider extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $auth_provider_id;

    /**
     * Updates a new authentication provider. This can be used to enable authentication with a third party service like Google or Facebook.
     *
     * @param int $authProviderId the authentication provider id to update
     */
    public function __construct(int $authProviderId)
    {
        $this->auth_provider_id = $authProviderId;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{auth_provider_id}'], [$this->auth_provider_id], '/api/admin/auth-provider/{auth_provider_id}/');
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
     * @return null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\UpdateAuthProviderBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\UpdateAuthProviderNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body);
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\UpdateAuthProviderBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiAdminAuthProviderAuthProviderIdPatchResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\UpdateAuthProviderNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiAdminAuthProviderAuthProviderIdPatchResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
