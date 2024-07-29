<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class ListAllApplicationsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsGetResponse400
     */
    private $apiApplicationsGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsGetResponse400 $apiApplicationsGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiApplicationsGetResponse400 = $apiApplicationsGetResponse400;
        $this->response = $response;
    }

    public function getApiApplicationsGetResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiApplicationsGetResponse400
    {
        return $this->apiApplicationsGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
