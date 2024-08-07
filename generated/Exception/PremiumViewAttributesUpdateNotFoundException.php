<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class PremiumViewAttributesUpdateNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewViewIdPremiumPatchResponse404
     */
    private $apiDatabaseViewViewIdPremiumPatchResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseViewViewIdPremiumPatchResponse404 $apiDatabaseViewViewIdPremiumPatchResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseViewViewIdPremiumPatchResponse404 = $apiDatabaseViewViewIdPremiumPatchResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseViewViewIdPremiumPatchResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseViewViewIdPremiumPatchResponse404
    {
        return $this->apiDatabaseViewViewIdPremiumPatchResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
