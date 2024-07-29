<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GroupListRoleAssignmentsNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiRoleGroupIdGetResponse404
     */
    private $apiRoleGroupIdGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiRoleGroupIdGetResponse404 $apiRoleGroupIdGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->apiRoleGroupIdGetResponse404 = $apiRoleGroupIdGetResponse404;
        $this->response = $response;
    }

    public function getApiRoleGroupIdGetResponse404(): \CedricZiel\Baserow\Generated\Model\ApiRoleGroupIdGetResponse404
    {
        return $this->apiRoleGroupIdGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
