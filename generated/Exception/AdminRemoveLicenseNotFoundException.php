<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Exception;

class AdminRemoveLicenseNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\phpbaserowclient\Generated\Model\ApiLicensesIdDeleteResponse404
     */
    private $apiLicensesIdDeleteResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\phpbaserowclient\Generated\Model\ApiLicensesIdDeleteResponse404 $apiLicensesIdDeleteResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiLicensesIdDeleteResponse404 = $apiLicensesIdDeleteResponse404;
        $this->response = $response;
    }

    public function getApiLicensesIdDeleteResponse404(): \cedricziel\phpbaserowclient\Generated\Model\ApiLicensesIdDeleteResponse404
    {
        return $this->apiLicensesIdDeleteResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
