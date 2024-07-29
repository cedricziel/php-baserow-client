<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class UpdateTeamBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdPutResponse400
     */
    private $apiTeamsTeamIdPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdPutResponse400 $apiTeamsTeamIdPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiTeamsTeamIdPutResponse400 = $apiTeamsTeamIdPutResponse400;
        $this->response = $response;
    }

    public function getApiTeamsTeamIdPutResponse400(): \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdPutResponse400
    {
        return $this->apiTeamsTeamIdPutResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
