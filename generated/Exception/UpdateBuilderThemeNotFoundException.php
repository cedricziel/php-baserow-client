<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class UpdateBuilderThemeNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiBuilderBuilderIdThemePatchResponse404
     */
    private $apiBuilderBuilderIdThemePatchResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiBuilderBuilderIdThemePatchResponse404 $apiBuilderBuilderIdThemePatchResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiBuilderBuilderIdThemePatchResponse404 = $apiBuilderBuilderIdThemePatchResponse404;
        $this->response = $response;
    }

    public function getApiBuilderBuilderIdThemePatchResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiBuilderBuilderIdThemePatchResponse404
    {
        return $this->apiBuilderBuilderIdThemePatchResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
