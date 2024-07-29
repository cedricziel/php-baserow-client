<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class RejectGroupInvitationNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiGroupsInvitationsGroupInvitationIdRejectPostResponse404
     */
    private $apiGroupsInvitationsGroupInvitationIdRejectPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiGroupsInvitationsGroupInvitationIdRejectPostResponse404 $apiGroupsInvitationsGroupInvitationIdRejectPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiGroupsInvitationsGroupInvitationIdRejectPostResponse404 = $apiGroupsInvitationsGroupInvitationIdRejectPostResponse404;
        $this->response = $response;
    }

    public function getApiGroupsInvitationsGroupInvitationIdRejectPostResponse404(): \CedricZiel\Baserow\Generated\Model\ApiGroupsInvitationsGroupInvitationIdRejectPostResponse404
    {
        return $this->apiGroupsInvitationsGroupInvitationIdRejectPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
