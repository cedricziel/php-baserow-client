<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetGroupInvitationByTokenNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiGroupsInvitationsTokenTokenGetResponse404
     */
    private $apiGroupsInvitationsTokenTokenGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiGroupsInvitationsTokenTokenGetResponse404 $apiGroupsInvitationsTokenTokenGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiGroupsInvitationsTokenTokenGetResponse404 = $apiGroupsInvitationsTokenTokenGetResponse404;
        $this->response = $response;
    }

    public function getApiGroupsInvitationsTokenTokenGetResponse404(): \CedricZiel\Baserow\Generated\Model\ApiGroupsInvitationsTokenTokenGetResponse404
    {
        return $this->apiGroupsInvitationsTokenTokenGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
