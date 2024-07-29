<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class ListWorkspaceUsersBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiWorkspacesUsersWorkspaceWorkspaceIdGetResponse400
     */
    private $apiWorkspacesUsersWorkspaceWorkspaceIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiWorkspacesUsersWorkspaceWorkspaceIdGetResponse400 $apiWorkspacesUsersWorkspaceWorkspaceIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiWorkspacesUsersWorkspaceWorkspaceIdGetResponse400 = $apiWorkspacesUsersWorkspaceWorkspaceIdGetResponse400;
        $this->response = $response;
    }

    public function getApiWorkspacesUsersWorkspaceWorkspaceIdGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiWorkspacesUsersWorkspaceWorkspaceIdGetResponse400
    {
        return $this->apiWorkspacesUsersWorkspaceWorkspaceIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
