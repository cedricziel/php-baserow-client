<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GetDatabaseFieldUniqueRowValuesNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseFieldsFieldIdUniqueRowValuesGetResponse404
     */
    private $apiDatabaseFieldsFieldIdUniqueRowValuesGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseFieldsFieldIdUniqueRowValuesGetResponse404 $apiDatabaseFieldsFieldIdUniqueRowValuesGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiDatabaseFieldsFieldIdUniqueRowValuesGetResponse404 = $apiDatabaseFieldsFieldIdUniqueRowValuesGetResponse404;
        $this->response = $response;
    }

    public function getApiDatabaseFieldsFieldIdUniqueRowValuesGetResponse404(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseFieldsFieldIdUniqueRowValuesGetResponse404
    {
        return $this->apiDatabaseFieldsFieldIdUniqueRowValuesGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
