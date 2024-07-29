<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UploadFileBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiUserFilesUploadFilePostResponse400
     */
    private $apiUserFilesUploadFilePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiUserFilesUploadFilePostResponse400 $apiUserFilesUploadFilePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiUserFilesUploadFilePostResponse400 = $apiUserFilesUploadFilePostResponse400;
        $this->response = $response;
    }

    public function getApiUserFilesUploadFilePostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiUserFilesUploadFilePostResponse400
    {
        return $this->apiUserFilesUploadFilePostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
