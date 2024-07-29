<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateRowCommentNotificationModeBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiRowCommentsTableIdRowIdNotificationModePutResponse400
     */
    private $apiRowCommentsTableIdRowIdNotificationModePutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiRowCommentsTableIdRowIdNotificationModePutResponse400 $apiRowCommentsTableIdRowIdNotificationModePutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiRowCommentsTableIdRowIdNotificationModePutResponse400 = $apiRowCommentsTableIdRowIdNotificationModePutResponse400;
        $this->response = $response;
    }

    public function getApiRowCommentsTableIdRowIdNotificationModePutResponse400(): \CedricZiel\Baserow\Generated\Model\ApiRowCommentsTableIdRowIdNotificationModePutResponse400
    {
        return $this->apiRowCommentsTableIdRowIdNotificationModePutResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
