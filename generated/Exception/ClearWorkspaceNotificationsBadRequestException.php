<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class ClearWorkspaceNotificationsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiNotificationsWorkspaceIdDeleteResponse400
     */
    private $apiNotificationsWorkspaceIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiNotificationsWorkspaceIdDeleteResponse400 $apiNotificationsWorkspaceIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiNotificationsWorkspaceIdDeleteResponse400 = $apiNotificationsWorkspaceIdDeleteResponse400;
        $this->response = $response;
    }

    public function getApiNotificationsWorkspaceIdDeleteResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiNotificationsWorkspaceIdDeleteResponse400
    {
        return $this->apiNotificationsWorkspaceIdDeleteResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
