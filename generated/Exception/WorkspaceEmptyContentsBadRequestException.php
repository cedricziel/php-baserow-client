<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class WorkspaceEmptyContentsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiTrashWorkspaceWorkspaceIdDeleteResponse400
     */
    private $apiTrashWorkspaceWorkspaceIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiTrashWorkspaceWorkspaceIdDeleteResponse400 $apiTrashWorkspaceWorkspaceIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiTrashWorkspaceWorkspaceIdDeleteResponse400 = $apiTrashWorkspaceWorkspaceIdDeleteResponse400;
        $this->response = $response;
    }

    public function getApiTrashWorkspaceWorkspaceIdDeleteResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiTrashWorkspaceWorkspaceIdDeleteResponse400
    {
        return $this->apiTrashWorkspaceWorkspaceIdDeleteResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
