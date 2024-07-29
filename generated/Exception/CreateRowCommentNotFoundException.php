<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class CreateRowCommentNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiRowCommentsTableIdRowIdPostResponse404
     */
    private $apiRowCommentsTableIdRowIdPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiRowCommentsTableIdRowIdPostResponse404 $apiRowCommentsTableIdRowIdPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiRowCommentsTableIdRowIdPostResponse404 = $apiRowCommentsTableIdRowIdPostResponse404;
        $this->response = $response;
    }

    public function getApiRowCommentsTableIdRowIdPostResponse404(): \CedricZiel\Baserow\Generated\Model\ApiRowCommentsTableIdRowIdPostResponse404
    {
        return $this->apiRowCommentsTableIdRowIdPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
