<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class ListWorkspaceNotifications extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $workspace_id;

    /**
     * Lists the notifications for the given workspace and the current user. The response is paginated and the limit and offset parameters can be controlled using the query parameters.
     *
     * @param int   $workspaceId     the workspace id that the notifications belong to
     * @param array $queryParameters {
     *
     * @var int $limit defines how many notifications should be returned
     * @var int $offset Defines the offset of the notifications that should be returned.
     *          }
     */
    public function __construct(int $workspaceId, array $queryParameters = [])
    {
        $this->workspace_id = $workspaceId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{workspace_id}'], [$this->workspace_id], '/api/notifications/{workspace_id}/');
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
        $optionsResolver->setDefined(['limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\Baserow\Generated\Model\PaginationSerializerNotificationRecipient|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\ListWorkspaceNotificationsBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\ListWorkspaceNotificationsNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\PaginationSerializerNotificationRecipient', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\ListWorkspaceNotificationsBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiNotificationsWorkspaceIdGetResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\ListWorkspaceNotificationsNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiNotificationsWorkspaceIdGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
