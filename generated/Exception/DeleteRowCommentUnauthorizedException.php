<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class DeleteRowCommentUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiRowCommentsTableIdCommentCommentIdDeleteResponse401
     */
    private $apiRowCommentsTableIdCommentCommentIdDeleteResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiRowCommentsTableIdCommentCommentIdDeleteResponse401 $apiRowCommentsTableIdCommentCommentIdDeleteResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->apiRowCommentsTableIdCommentCommentIdDeleteResponse401 = $apiRowCommentsTableIdCommentCommentIdDeleteResponse401;
        $this->response = $response;
    }

    public function getApiRowCommentsTableIdCommentCommentIdDeleteResponse401(): \cedricziel\phpbaserowclient\Generated\Model\ApiRowCommentsTableIdCommentCommentIdDeleteResponse401
    {
        return $this->apiRowCommentsTableIdCommentCommentIdDeleteResponse401;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
