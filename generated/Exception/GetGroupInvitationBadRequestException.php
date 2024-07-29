<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class GetGroupInvitationBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiGroupsInvitationsGroupInvitationIdGetResponse400
     */
    private $apiGroupsInvitationsGroupInvitationIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiGroupsInvitationsGroupInvitationIdGetResponse400 $apiGroupsInvitationsGroupInvitationIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiGroupsInvitationsGroupInvitationIdGetResponse400 = $apiGroupsInvitationsGroupInvitationIdGetResponse400;
        $this->response = $response;
    }

    public function getApiGroupsInvitationsGroupInvitationIdGetResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiGroupsInvitationsGroupInvitationIdGetResponse400
    {
        return $this->apiGroupsInvitationsGroupInvitationIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
