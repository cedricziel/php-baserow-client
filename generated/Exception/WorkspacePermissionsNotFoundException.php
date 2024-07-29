<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class WorkspacePermissionsNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiWorkspacesWorkspaceIdPermissionsGetResponse404
     */
    private $apiWorkspacesWorkspaceIdPermissionsGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiWorkspacesWorkspaceIdPermissionsGetResponse404 $apiWorkspacesWorkspaceIdPermissionsGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiWorkspacesWorkspaceIdPermissionsGetResponse404 = $apiWorkspacesWorkspaceIdPermissionsGetResponse404;
        $this->response = $response;
    }

    public function getApiWorkspacesWorkspaceIdPermissionsGetResponse404(): \CedricZiel\Baserow\Generated\Model\ApiWorkspacesWorkspaceIdPermissionsGetResponse404
    {
        return $this->apiWorkspacesWorkspaceIdPermissionsGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
