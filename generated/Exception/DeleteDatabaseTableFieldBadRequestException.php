<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class DeleteDatabaseTableFieldBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseFieldsFieldIdDeleteResponse400
     */
    private $apiDatabaseFieldsFieldIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseFieldsFieldIdDeleteResponse400 $apiDatabaseFieldsFieldIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseFieldsFieldIdDeleteResponse400 = $apiDatabaseFieldsFieldIdDeleteResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseFieldsFieldIdDeleteResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseFieldsFieldIdDeleteResponse400
    {
        return $this->apiDatabaseFieldsFieldIdDeleteResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
