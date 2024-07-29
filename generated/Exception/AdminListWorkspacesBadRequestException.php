<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class AdminListWorkspacesBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiAdminWorkspacesGetResponse400
     */
    private $apiAdminWorkspacesGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiAdminWorkspacesGetResponse400 $apiAdminWorkspacesGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiAdminWorkspacesGetResponse400 = $apiAdminWorkspacesGetResponse400;
        $this->response = $response;
    }

    public function getApiAdminWorkspacesGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiAdminWorkspacesGetResponse400
    {
        return $this->apiAdminWorkspacesGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
