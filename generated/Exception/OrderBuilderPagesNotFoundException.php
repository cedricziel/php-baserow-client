<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class OrderBuilderPagesNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiBuilderBuilderIdPagesOrderPostResponse404
     */
    private $apiBuilderBuilderIdPagesOrderPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiBuilderBuilderIdPagesOrderPostResponse404 $apiBuilderBuilderIdPagesOrderPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiBuilderBuilderIdPagesOrderPostResponse404 = $apiBuilderBuilderIdPagesOrderPostResponse404;
        $this->response = $response;
    }

    public function getApiBuilderBuilderIdPagesOrderPostResponse404(): \CedricZiel\Baserow\Generated\Model\ApiBuilderBuilderIdPagesOrderPostResponse404
    {
        return $this->apiBuilderBuilderIdPagesOrderPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
