<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class GetWorkspaceGenerativeAiModelsSettings extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $workspace_id;

    /**
     * Returns the generative AI models settings for the given workspace.
     */
    public function __construct(string $workspaceId)
    {
        $this->workspace_id = $workspaceId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{workspace_id}'], [$this->workspace_id], '/api/workspaces/{workspace_id}/settings/generative-ai/');
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
     * @return \CedricZiel\Baserow\Generated\Model\GenerativeAISettings|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\GenerativeAISettings', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
