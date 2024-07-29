<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class AcceptGroupInvitationBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiGroupsInvitationsGroupInvitationIdAcceptPostResponse400
     */
    private $apiGroupsInvitationsGroupInvitationIdAcceptPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiGroupsInvitationsGroupInvitationIdAcceptPostResponse400 $apiGroupsInvitationsGroupInvitationIdAcceptPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiGroupsInvitationsGroupInvitationIdAcceptPostResponse400 = $apiGroupsInvitationsGroupInvitationIdAcceptPostResponse400;
        $this->response = $response;
    }

    public function getApiGroupsInvitationsGroupInvitationIdAcceptPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiGroupsInvitationsGroupInvitationIdAcceptPostResponse400
    {
        return $this->apiGroupsInvitationsGroupInvitationIdAcceptPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
