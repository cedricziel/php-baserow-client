<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class InstallTemplateBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallWorkspaceIdTemplateIdPostResponse400
     */
    private $apiTemplatesInstallWorkspaceIdTemplateIdPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallWorkspaceIdTemplateIdPostResponse400 $apiTemplatesInstallWorkspaceIdTemplateIdPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiTemplatesInstallWorkspaceIdTemplateIdPostResponse400 = $apiTemplatesInstallWorkspaceIdTemplateIdPostResponse400;
        $this->response = $response;
    }

    public function getApiTemplatesInstallWorkspaceIdTemplateIdPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallWorkspaceIdTemplateIdPostResponse400
    {
        return $this->apiTemplatesInstallWorkspaceIdTemplateIdPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
