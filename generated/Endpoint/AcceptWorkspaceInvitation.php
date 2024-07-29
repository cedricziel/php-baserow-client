<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class AcceptWorkspaceInvitation extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $workspace_invitation_id;

    /**
     * Accepts a workspace invitation with the given id if the email address of the user matches that of the invitation.
     *
     * @param int $workspaceInvitationId accepts the workspace invitation related to the provided value
     */
    public function __construct(int $workspaceInvitationId)
    {
        $this->workspace_invitation_id = $workspaceInvitationId;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{workspace_invitation_id}'], [$this->workspace_invitation_id], '/api/workspaces/invitations/{workspace_invitation_id}/accept/');
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
     * @return \cedricziel\phpbaserowclient\Generated\Model\WorkspaceUserWorkspace|null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\AcceptWorkspaceInvitationBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\AcceptWorkspaceInvitationNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\WorkspaceUserWorkspace', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\AcceptWorkspaceInvitationBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiWorkspacesInvitationsWorkspaceInvitationIdAcceptPostResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\AcceptWorkspaceInvitationNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiWorkspacesInvitationsWorkspaceInvitationIdAcceptPostResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
