<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class TypeFormulaFieldBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiDatabaseFormulaTableIdTypePostResponse400
     */
    private $apiDatabaseFormulaTableIdTypePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiDatabaseFormulaTableIdTypePostResponse400 $apiDatabaseFormulaTableIdTypePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiDatabaseFormulaTableIdTypePostResponse400 = $apiDatabaseFormulaTableIdTypePostResponse400;
        $this->response = $response;
    }

    public function getApiDatabaseFormulaTableIdTypePostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiDatabaseFormulaTableIdTypePostResponse400
    {
        return $this->apiDatabaseFormulaTableIdTypePostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
