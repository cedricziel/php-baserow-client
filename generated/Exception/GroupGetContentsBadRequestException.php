<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GroupGetContentsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiTrashGroupGroupIdGetResponse400
     */
    private $apiTrashGroupGroupIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiTrashGroupGroupIdGetResponse400 $apiTrashGroupGroupIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiTrashGroupGroupIdGetResponse400 = $apiTrashGroupGroupIdGetResponse400;
        $this->response = $response;
    }

    public function getApiTrashGroupGroupIdGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiTrashGroupGroupIdGetResponse400
    {
        return $this->apiTrashGroupGroupIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
