<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class WorkspaceGetApplicationBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsApplicationIdGetResponse400
     */
    private $apiApplicationsApplicationIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsApplicationIdGetResponse400 $apiApplicationsApplicationIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiApplicationsApplicationIdGetResponse400 = $apiApplicationsApplicationIdGetResponse400;
        $this->response = $response;
    }

    public function getApiApplicationsApplicationIdGetResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsApplicationIdGetResponse400
    {
        return $this->apiApplicationsApplicationIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
