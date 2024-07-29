<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class DeleteWorkspaceBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiWorkspacesWorkspaceIdDeleteResponse400
     */
    private $apiWorkspacesWorkspaceIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiWorkspacesWorkspaceIdDeleteResponse400 $apiWorkspacesWorkspaceIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiWorkspacesWorkspaceIdDeleteResponse400 = $apiWorkspacesWorkspaceIdDeleteResponse400;
        $this->response = $response;
    }

    public function getApiWorkspacesWorkspaceIdDeleteResponse400(): \CedricZiel\Baserow\Generated\Model\ApiWorkspacesWorkspaceIdDeleteResponse400
    {
        return $this->apiWorkspacesWorkspaceIdDeleteResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
