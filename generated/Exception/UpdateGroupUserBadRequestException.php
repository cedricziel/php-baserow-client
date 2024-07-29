<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateGroupUserBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiGroupsUsersGroupUserIdPatchResponse400
     */
    private $apiGroupsUsersGroupUserIdPatchResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiGroupsUsersGroupUserIdPatchResponse400 $apiGroupsUsersGroupUserIdPatchResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiGroupsUsersGroupUserIdPatchResponse400 = $apiGroupsUsersGroupUserIdPatchResponse400;
        $this->response = $response;
    }

    public function getApiGroupsUsersGroupUserIdPatchResponse400(): \CedricZiel\Baserow\Generated\Model\ApiGroupsUsersGroupUserIdPatchResponse400
    {
        return $this->apiGroupsUsersGroupUserIdPatchResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
