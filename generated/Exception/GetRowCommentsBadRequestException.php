<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetRowCommentsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiRowCommentsTableIdRowIdGetResponse400
     */
    private $apiRowCommentsTableIdRowIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiRowCommentsTableIdRowIdGetResponse400 $apiRowCommentsTableIdRowIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiRowCommentsTableIdRowIdGetResponse400 = $apiRowCommentsTableIdRowIdGetResponse400;
        $this->response = $response;
    }

    public function getApiRowCommentsTableIdRowIdGetResponse400(): \CedricZiel\Baserow\Generated\Model\ApiRowCommentsTableIdRowIdGetResponse400
    {
        return $this->apiRowCommentsTableIdRowIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
