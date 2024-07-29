<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class BatchAssignRoleNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiRoleWorkspaceIdBatchPostResponse404
     */
    private $apiRoleWorkspaceIdBatchPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiRoleWorkspaceIdBatchPostResponse404 $apiRoleWorkspaceIdBatchPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiRoleWorkspaceIdBatchPostResponse404 = $apiRoleWorkspaceIdBatchPostResponse404;
        $this->response = $response;
    }

    public function getApiRoleWorkspaceIdBatchPostResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiRoleWorkspaceIdBatchPostResponse404
    {
        return $this->apiRoleWorkspaceIdBatchPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
