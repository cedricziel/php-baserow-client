<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class AsyncAuditLogExportNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiAdminAuditLogExportPostResponse404
     */
    private $apiAdminAuditLogExportPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiAdminAuditLogExportPostResponse404 $apiAdminAuditLogExportPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiAdminAuditLogExportPostResponse404 = $apiAdminAuditLogExportPostResponse404;
        $this->response = $response;
    }

    public function getApiAdminAuditLogExportPostResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiAdminAuditLogExportPostResponse404
    {
        return $this->apiAdminAuditLogExportPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
