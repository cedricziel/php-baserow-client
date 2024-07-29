<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class CreateSubjectNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsPostResponse404
     */
    private $apiTeamsTeamIdSubjectsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsPostResponse404 $apiTeamsTeamIdSubjectsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiTeamsTeamIdSubjectsPostResponse404 = $apiTeamsTeamIdSubjectsPostResponse404;
        $this->response = $response;
    }

    public function getApiTeamsTeamIdSubjectsPostResponse404(): \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsPostResponse404
    {
        return $this->apiTeamsTeamIdSubjectsPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
