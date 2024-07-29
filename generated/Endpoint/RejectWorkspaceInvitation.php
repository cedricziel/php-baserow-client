<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class RejectWorkspaceInvitation extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $workspace_invitation_id;

    /**
     * Rejects a workspace invitation with the given id if the email address of the user matches that of the invitation.
     *
     * @param int $workspaceInvitationId rejects the workspace invitation related to the provided value
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
        return str_replace(['{workspace_invitation_id}'], [$this->workspace_invitation_id], '/api/workspaces/invitations/{workspace_invitation_id}/reject/');
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
     * @throws \CedricZiel\Baserow\Generated\Exception\RejectWorkspaceInvitationBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\RejectWorkspaceInvitationNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\RejectWorkspaceInvitationBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiWorkspacesInvitationsWorkspaceInvitationIdRejectPostResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\RejectWorkspaceInvitationNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiWorkspacesInvitationsWorkspaceInvitationIdRejectPostResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
