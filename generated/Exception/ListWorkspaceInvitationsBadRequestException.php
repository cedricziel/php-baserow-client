<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class ListWorkspaceInvitationsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiWorkspacesInvitationsWorkspaceWorkspaceIdGetResponse400
     */
    private $apiWorkspacesInvitationsWorkspaceWorkspaceIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiWorkspacesInvitationsWorkspaceWorkspaceIdGetResponse400 $apiWorkspacesInvitationsWorkspaceWorkspaceIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiWorkspacesInvitationsWorkspaceWorkspaceIdGetResponse400 = $apiWorkspacesInvitationsWorkspaceWorkspaceIdGetResponse400;
        $this->response = $response;
    }

    public function getApiWorkspacesInvitationsWorkspaceWorkspaceIdGetResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiWorkspacesInvitationsWorkspaceWorkspaceIdGetResponse400
    {
        return $this->apiWorkspacesInvitationsWorkspaceWorkspaceIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
