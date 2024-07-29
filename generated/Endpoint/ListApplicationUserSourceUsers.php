<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class ListApplicationUserSourceUsers extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $application_id;

    /**
     * List per user sources the first 5 users available.
     *
     * @param int $applicationId the application we want the users for
     */
    public function __construct(int $applicationId)
    {
        $this->application_id = $applicationId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{application_id}'], [$this->application_id], '/api/application/{application_id}/list-user-source-users/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \cedricziel\phpbaserowclient\Generated\Model\UsersPerUserSource|null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\ListApplicationUserSourceUsersNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\UsersPerUserSource', 'json');
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\ListApplicationUserSourceUsersNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiApplicationApplicationIdListUserSourceUsersGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
