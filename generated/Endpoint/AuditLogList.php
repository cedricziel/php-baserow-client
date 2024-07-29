<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class AuditLogList extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;

    /**
     * Lists all audit log entries for the given workspace id.
     *
     * This is a **enterprise** feature.
     *
     * @param array $queryParameters {
     *
     * @var string $action_type filter the audit log entries by action type
     * @var string $from_timestamp the ISO timestamp to filter the audit log entries from
     * @var int    $page defines which page should be returned
     * @var int    $size defines how many audit log entries should be returned per page
     * @var string $sorts A comma separated string of attributes to sort by, each attribute must be prefixed with `+` for a descending sort or a `-` for an ascending sort. The accepted attribute names are: `user, workspace, type, timestamp, ip_address`. For example `sorts=-user,-workspace` will sort the audit log entries first by descending user and then ascending workspace. A sortparameter with multiple instances of the same sort attribute will respond with the ERROR_INVALID_SORT_ATTRIBUTE error.
     * @var string $to_timestamp the ISO timestamp to filter the audit log entries to
     * @var int    $user_id filter the audit log entries by user id
     * @var int    $workspace_id Filter the audit log entries by workspace id. This filter works only for the admin audit log.
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
        return '/api/admin/audit-log/';
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
        $optionsResolver->setDefined(['action_type', 'from_timestamp', 'page', 'size', 'sorts', 'to_timestamp', 'user_id', 'workspace_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('action_type', ['string']);
        $optionsResolver->addAllowedTypes('from_timestamp', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('size', ['int']);
        $optionsResolver->addAllowedTypes('sorts', ['string']);
        $optionsResolver->addAllowedTypes('to_timestamp', ['string']);
        $optionsResolver->addAllowedTypes('user_id', ['int']);
        $optionsResolver->addAllowedTypes('workspace_id', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\Baserow\Generated\Model\PaginationSerializerAuditLog|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\AuditLogListBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\AuditLogListUnauthorizedException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\PaginationSerializerAuditLog', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\AuditLogListBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiAdminAuditLogGetResponse400', 'json'), $response);
        }
        if (401 === $status) {
            throw new \CedricZiel\Baserow\Generated\Exception\AuditLogListUnauthorizedException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
