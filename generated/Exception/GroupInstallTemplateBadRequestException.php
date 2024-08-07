<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Exception;

class GroupInstallTemplateBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallGroupIdTemplateIdPostResponse400
     */
    private $apiTemplatesInstallGroupIdTemplateIdPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallGroupIdTemplateIdPostResponse400 $apiTemplatesInstallGroupIdTemplateIdPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->apiTemplatesInstallGroupIdTemplateIdPostResponse400 = $apiTemplatesInstallGroupIdTemplateIdPostResponse400;
        $this->response = $response;
    }

    public function getApiTemplatesInstallGroupIdTemplateIdPostResponse400(): \CedricZiel\Baserow\Generated\Model\ApiTemplatesInstallGroupIdTemplateIdPostResponse400
    {
        return $this->apiTemplatesInstallGroupIdTemplateIdPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
