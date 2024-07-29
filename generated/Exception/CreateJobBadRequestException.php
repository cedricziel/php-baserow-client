<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class CreateJobBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiJobsPostResponse400
     */
    private $apiJobsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiJobsPostResponse400 $apiJobsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiJobsPostResponse400 = $apiJobsPostResponse400;
        $this->response = $response;
    }

    public function getApiJobsPostResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiJobsPostResponse400
    {
        return $this->apiJobsPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
