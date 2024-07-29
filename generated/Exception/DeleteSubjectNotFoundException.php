<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class DeleteSubjectNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsSubjectIdDeleteResponse404
     */
    private $apiTeamsTeamIdSubjectsSubjectIdDeleteResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsSubjectIdDeleteResponse404 $apiTeamsTeamIdSubjectsSubjectIdDeleteResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiTeamsTeamIdSubjectsSubjectIdDeleteResponse404 = $apiTeamsTeamIdSubjectsSubjectIdDeleteResponse404;
        $this->response = $response;
    }

    public function getApiTeamsTeamIdSubjectsSubjectIdDeleteResponse404(): \CedricZiel\Baserow\Generated\Model\ApiTeamsTeamIdSubjectsSubjectIdDeleteResponse404
    {
        return $this->apiTeamsTeamIdSubjectsSubjectIdDeleteResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
