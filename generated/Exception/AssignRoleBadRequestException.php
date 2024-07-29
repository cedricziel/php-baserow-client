<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class AssignRoleBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiRoleWorkspaceIdPostResponse400
     */
    private $apiRoleWorkspaceIdPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiRoleWorkspaceIdPostResponse400 $apiRoleWorkspaceIdPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiRoleWorkspaceIdPostResponse400 = $apiRoleWorkspaceIdPostResponse400;
        $this->response = $response;
    }

    public function getApiRoleWorkspaceIdPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiRoleWorkspaceIdPostResponse400
    {
        return $this->apiRoleWorkspaceIdPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
