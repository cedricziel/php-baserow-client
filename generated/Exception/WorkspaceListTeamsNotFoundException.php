<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class WorkspaceListTeamsNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiTeamsWorkspaceWorkspaceIdGetResponse404
     */
    private $apiTeamsWorkspaceWorkspaceIdGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiTeamsWorkspaceWorkspaceIdGetResponse404 $apiTeamsWorkspaceWorkspaceIdGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiTeamsWorkspaceWorkspaceIdGetResponse404 = $apiTeamsWorkspaceWorkspaceIdGetResponse404;
        $this->response = $response;
    }

    public function getApiTeamsWorkspaceWorkspaceIdGetResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiTeamsWorkspaceWorkspaceIdGetResponse404
    {
        return $this->apiTeamsWorkspaceWorkspaceIdGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
