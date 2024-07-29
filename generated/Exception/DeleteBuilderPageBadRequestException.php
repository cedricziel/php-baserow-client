<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class DeleteBuilderPageBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiBuilderPagesPageIdDeleteResponse400
     */
    private $apiBuilderPagesPageIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiBuilderPagesPageIdDeleteResponse400 $apiBuilderPagesPageIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiBuilderPagesPageIdDeleteResponse400 = $apiBuilderPagesPageIdDeleteResponse400;
        $this->response = $response;
    }

    public function getApiBuilderPagesPageIdDeleteResponse400(): \CedricZiel\Baserow\Generated\Model\ApiBuilderPagesPageIdDeleteResponse400
    {
        return $this->apiBuilderPagesPageIdDeleteResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
