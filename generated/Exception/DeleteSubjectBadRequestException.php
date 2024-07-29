<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class DeleteSubjectBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsSubjectIdDeleteResponse400
     */
    private $apiTeamsTeamIdSubjectsSubjectIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsSubjectIdDeleteResponse400 $apiTeamsTeamIdSubjectsSubjectIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiTeamsTeamIdSubjectsSubjectIdDeleteResponse400 = $apiTeamsTeamIdSubjectsSubjectIdDeleteResponse400;
        $this->response = $response;
    }

    public function getApiTeamsTeamIdSubjectsSubjectIdDeleteResponse400(): \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsSubjectIdDeleteResponse400
    {
        return $this->apiTeamsTeamIdSubjectsSubjectIdDeleteResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
