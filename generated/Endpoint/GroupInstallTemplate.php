<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class GroupInstallTemplate extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $group_id;
    protected $template_id;

    /**
     * **This endpoint has been deprecated and replaced with a new endpoint, [workspace_install_template](#tag/Templates/operation/workspace_install_template).**.
     *
     **Support for this endpoint will end in 2024.**
     *
     * Installs the applications of the given template into the given group if the user has access to that group. The response contains those newly created applications.
     *
     * @param int   $groupId          the id related to the group where the template applications must be installed into
     * @param int   $templateId       the id related to the template that must be installed
     * @param array $headerParameters {
     *
     * @var string $ClientSessionId An optional header that marks the action performed by this request as having occurred in a particular client session. Then using the undo/redo endpoints with the same ClientSessionId header this action can be undone/redone.
     * @var string $ClientUndoRedoActionGroupId An optional header that marks the action performed by this request as having occurred in a particular action group.Then calling the undo/redo endpoint with the same ClientSessionId header, all the actions belonging to the same action group can be undone/redone together in a single API call.
     *             }
     */
    public function __construct(int $groupId, int $templateId, array $headerParameters = [])
    {
        $this->group_id = $groupId;
        $this->template_id = $templateId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{group_id}', '{template_id}'], [$this->group_id, $this->template_id], '/api/templates/install/{group_id}/{template_id}/');
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
     * @return null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\GroupInstallTemplateBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\GroupInstallTemplateNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body);
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\GroupInstallTemplateBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallGroupIdTemplateIdPostResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\GroupInstallTemplateNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallGroupIdTemplateIdPostResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
