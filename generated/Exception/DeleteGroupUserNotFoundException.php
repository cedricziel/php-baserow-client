<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class DeleteGroupUserNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiGroupsUsersGroupUserIdDeleteResponse404
     */
    private $apiGroupsUsersGroupUserIdDeleteResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiGroupsUsersGroupUserIdDeleteResponse404 $apiGroupsUsersGroupUserIdDeleteResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiGroupsUsersGroupUserIdDeleteResponse404 = $apiGroupsUsersGroupUserIdDeleteResponse404;
        $this->response = $response;
    }

    public function getApiGroupsUsersGroupUserIdDeleteResponse404(): \CedricZiel\Baserow\Generated\Model\ApiGroupsUsersGroupUserIdDeleteResponse404
    {
        return $this->apiGroupsUsersGroupUserIdDeleteResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
