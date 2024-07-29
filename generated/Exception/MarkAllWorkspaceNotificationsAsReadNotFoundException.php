<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class MarkAllWorkspaceNotificationsAsReadNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiNotificationsWorkspaceIdMarkAllAsReadPostResponse404
     */
    private $apiNotificationsWorkspaceIdMarkAllAsReadPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiNotificationsWorkspaceIdMarkAllAsReadPostResponse404 $apiNotificationsWorkspaceIdMarkAllAsReadPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiNotificationsWorkspaceIdMarkAllAsReadPostResponse404 = $apiNotificationsWorkspaceIdMarkAllAsReadPostResponse404;
        $this->response = $response;
    }

    public function getApiNotificationsWorkspaceIdMarkAllAsReadPostResponse404(): \CedricZiel\Baserow\Generated\Model\ApiNotificationsWorkspaceIdMarkAllAsReadPostResponse404
    {
        return $this->apiNotificationsWorkspaceIdMarkAllAsReadPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
