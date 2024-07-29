<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class AuditLogWorkspaces2BadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiAuditLogWorkspacesGetResponse400
     */
    private $apiAuditLogWorkspacesGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiAuditLogWorkspacesGetResponse400 $apiAuditLogWorkspacesGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiAuditLogWorkspacesGetResponse400 = $apiAuditLogWorkspacesGetResponse400;
        $this->response = $response;
    }

    public function getApiAuditLogWorkspacesGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiAuditLogWorkspacesGetResponse400
    {
        return $this->apiAuditLogWorkspacesGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
