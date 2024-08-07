<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class LeaveGroupNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiGroupsGroupIdLeavePostResponse404
     */
    private $apiGroupsGroupIdLeavePostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiGroupsGroupIdLeavePostResponse404 $apiGroupsGroupIdLeavePostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiGroupsGroupIdLeavePostResponse404 = $apiGroupsGroupIdLeavePostResponse404;
        $this->response = $response;
    }

    public function getApiGroupsGroupIdLeavePostResponse404(): \CedricZiel\Baserow\Generated\Model\ApiGroupsGroupIdLeavePostResponse404
    {
        return $this->apiGroupsGroupIdLeavePostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
