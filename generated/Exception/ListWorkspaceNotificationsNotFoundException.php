<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class ListWorkspaceNotificationsNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiNotificationsWorkspaceIdGetResponse404
     */
    private $apiNotificationsWorkspaceIdGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiNotificationsWorkspaceIdGetResponse404 $apiNotificationsWorkspaceIdGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiNotificationsWorkspaceIdGetResponse404 = $apiNotificationsWorkspaceIdGetResponse404;
        $this->response = $response;
    }

    public function getApiNotificationsWorkspaceIdGetResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiNotificationsWorkspaceIdGetResponse404
    {
        return $this->apiNotificationsWorkspaceIdGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
