<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class VerifyEmailBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiUserVerifyEmailPostResponse400
     */
    private $apiUserVerifyEmailPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiUserVerifyEmailPostResponse400 $apiUserVerifyEmailPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiUserVerifyEmailPostResponse400 = $apiUserVerifyEmailPostResponse400;
        $this->response = $response;
    }

    public function getApiUserVerifyEmailPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiUserVerifyEmailPostResponse400
    {
        return $this->apiUserVerifyEmailPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
