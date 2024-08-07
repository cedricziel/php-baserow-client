<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class CreateSubjectBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsPostResponse400
     */
    private $apiTeamsTeamIdSubjectsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsPostResponse400 $apiTeamsTeamIdSubjectsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiTeamsTeamIdSubjectsPostResponse400 = $apiTeamsTeamIdSubjectsPostResponse400;
        $this->response = $response;
    }

    public function getApiTeamsTeamIdSubjectsPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsPostResponse400
    {
        return $this->apiTeamsTeamIdSubjectsPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
