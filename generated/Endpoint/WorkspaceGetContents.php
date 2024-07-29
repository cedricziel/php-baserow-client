<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class WorkspaceGetContents extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $workspace_id;

    /**
     * Responds with trash contents for a workspace optionally filtered to a specific application.
     *
     * @param int   $workspaceId     returns the trash for the workspace with this id
     * @param array $queryParameters {
     *
     * @var int $application_id optionally filters down the trash to only items for this application in the workspace
     * @var int $page Selects which page of trash contents should be returned.
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
        return str_replace(['{workspace_id}'], [$this->workspace_id], '/api/trash/workspace/{workspace_id}/');
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
        $optionsResolver->setDefined(['application_id', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('application_id', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\WorkspaceGetContentsBadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\WorkspaceGetContentsBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiTrashWorkspaceWorkspaceIdGetResponse400', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
