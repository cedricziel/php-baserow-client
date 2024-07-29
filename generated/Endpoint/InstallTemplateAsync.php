<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class InstallTemplateAsync extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $template_id;
    protected $workspace_id;

    /**
     * Start an async job to install the applications of the given template into the given workspace if the user has access to that workspace. The response contains those newly created applications.
     *
     * @param int   $templateId       the id related to the template that must be installed
     * @param int   $workspaceId      the id related to the workspace where the template applications must be installed into
     * @param array $headerParameters {
     *
     * @var string $ClientSessionId An optional header that marks the action performed by this request as having occurred in a particular client session. Then using the undo/redo endpoints with the same ClientSessionId header this action can be undone/redone.
     * @var string $ClientUndoRedoActionGroupId An optional header that marks the action performed by this request as having occurred in a particular action group.Then calling the undo/redo endpoint with the same ClientSessionId header, all the actions belonging to the same action group can be undone/redone together in a single API call.
     *             }
     */
    public function __construct(int $templateId, int $workspaceId, array $headerParameters = [])
    {
        $this->template_id = $templateId;
        $this->workspace_id = $workspaceId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{template_id}', '{workspace_id}'], [$this->template_id, $this->workspace_id], '/api/templates/install/{workspace_id}/{template_id}/async/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['ClientSessionId', 'ClientUndoRedoActionGroupId']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ClientSessionId', ['string']);
        $optionsResolver->addAllowedTypes('ClientUndoRedoActionGroupId', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\Baserow\Generated\Model\SingleInstallTemplateJobType|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\InstallTemplateAsyncBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\InstallTemplateAsyncNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\SingleInstallTemplateJobType', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\InstallTemplateAsyncBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallWorkspaceIdTemplateIdAsyncPostResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\InstallTemplateAsyncNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallWorkspaceIdTemplateIdAsyncPostResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
