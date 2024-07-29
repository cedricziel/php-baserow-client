<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class GetWorkspaceInvitation extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $workspace_invitation_id;

    /**
     * Returns the requested workspace invitation if the authorized user has admin right to the related workspace.
     *
     * @param int $workspaceInvitationId returns the workspace invitation related to the provided value
     */
    public function __construct(int $workspaceInvitationId)
    {
        $this->workspace_invitation_id = $workspaceInvitationId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{workspace_invitation_id}'], [$this->workspace_invitation_id], '/api/workspaces/invitations/{workspace_invitation_id}/');
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
     * @return \cedricziel\phpbaserowclient\Generated\Model\WorkspaceInvitation|null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\GetWorkspaceInvitationBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\GetWorkspaceInvitationNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\WorkspaceInvitation', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\GetWorkspaceInvitationBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiWorkspacesInvitationsWorkspaceInvitationIdGetResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\GetWorkspaceInvitationNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiWorkspacesInvitationsWorkspaceInvitationIdGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
