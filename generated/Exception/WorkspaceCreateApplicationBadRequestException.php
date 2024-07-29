<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class WorkspaceCreateApplicationBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsWorkspaceWorkspaceIdPostResponse400
     */
    private $apiApplicationsWorkspaceWorkspaceIdPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsWorkspaceWorkspaceIdPostResponse400 $apiApplicationsWorkspaceWorkspaceIdPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiApplicationsWorkspaceWorkspaceIdPostResponse400 = $apiApplicationsWorkspaceWorkspaceIdPostResponse400;
        $this->response = $response;
    }

    public function getApiApplicationsWorkspaceWorkspaceIdPostResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsWorkspaceWorkspaceIdPostResponse400
    {
        return $this->apiApplicationsWorkspaceWorkspaceIdPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
