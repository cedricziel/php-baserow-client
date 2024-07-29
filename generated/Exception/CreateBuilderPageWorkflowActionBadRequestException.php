<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class CreateBuilderPageWorkflowActionBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiBuilderPagePageIdWorkflowActionsPostResponse400
     */
    private $apiBuilderPagePageIdWorkflowActionsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiBuilderPagePageIdWorkflowActionsPostResponse400 $apiBuilderPagePageIdWorkflowActionsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiBuilderPagePageIdWorkflowActionsPostResponse400 = $apiBuilderPagePageIdWorkflowActionsPostResponse400;
        $this->response = $response;
    }

    public function getApiBuilderPagePageIdWorkflowActionsPostResponse400(): \cedricziel\phpbaserowclient\Generated\Model\ApiBuilderPagePageIdWorkflowActionsPostResponse400
    {
        return $this->apiBuilderPagePageIdWorkflowActionsPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
