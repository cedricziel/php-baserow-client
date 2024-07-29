<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class WorkspaceGetContentsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiTrashWorkspaceWorkspaceIdGetResponse400
     */
    private $apiTrashWorkspaceWorkspaceIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiTrashWorkspaceWorkspaceIdGetResponse400 $apiTrashWorkspaceWorkspaceIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiTrashWorkspaceWorkspaceIdGetResponse400 = $apiTrashWorkspaceWorkspaceIdGetResponse400;
        $this->response = $response;
    }

    public function getApiTrashWorkspaceWorkspaceIdGetResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiTrashWorkspaceWorkspaceIdGetResponse400
    {
        return $this->apiTrashWorkspaceWorkspaceIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
