<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class AuditLogUsersBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiAdminAuditLogUsersGetResponse400
     */
    private $apiAdminAuditLogUsersGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiAdminAuditLogUsersGetResponse400 $apiAdminAuditLogUsersGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiAdminAuditLogUsersGetResponse400 = $apiAdminAuditLogUsersGetResponse400;
        $this->response = $response;
    }

    public function getApiAdminAuditLogUsersGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiAdminAuditLogUsersGetResponse400
    {
        return $this->apiAdminAuditLogUsersGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
