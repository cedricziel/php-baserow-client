<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class AuditLogUsers extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;

    /**
     * List all users that have performed an action in the audit log.
     *
     * This is a **enterprise** feature.
     *
     * @param array $queryParameters {
     *
     * @var int    $page defines which page should be returned
     * @var string $search if provided only users with email that match the query will be returned
     * @var int    $size defines how many users should be returned per page
     * @var int    $workspace_id Return users belonging to the given workspace_id.
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
        return '/api/admin/audit-log/users/';
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
        $optionsResolver->setDefined(['page', 'search', 'size', 'workspace_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('search', ['string']);
        $optionsResolver->addAllowedTypes('size', ['int']);
        $optionsResolver->addAllowedTypes('workspace_id', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\Baserow\Generated\Model\PaginationSerializerAuditLogUser|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\AuditLogUsersBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\AuditLogUsersUnauthorizedException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\PaginationSerializerAuditLogUser', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\AuditLogUsersBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiAdminAuditLogUsersGetResponse400', 'json'), $response);
        }
        if (401 === $status) {
            throw new \CedricZiel\Baserow\Generated\Exception\AuditLogUsersUnauthorizedException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
