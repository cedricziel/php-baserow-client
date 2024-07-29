<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class GroupOrderApplicationsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsGroupGroupIdOrderPostResponse400
     */
    private $apiApplicationsGroupGroupIdOrderPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsGroupGroupIdOrderPostResponse400 $apiApplicationsGroupGroupIdOrderPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiApplicationsGroupGroupIdOrderPostResponse400 = $apiApplicationsGroupGroupIdOrderPostResponse400;
        $this->response = $response;
    }

    public function getApiApplicationsGroupGroupIdOrderPostResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsGroupGroupIdOrderPostResponse400
    {
        return $this->apiApplicationsGroupGroupIdOrderPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
