<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class AdminRemoveUserFromLicense extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $id;
    protected $user_id;

    /**
     * Removes the user related to the provided parameter and to the license related to the parameter. This only happens if the user is on the license, otherwise nothing will happen.
     *
     * @param int $id     the internal identifier of the license, this is `id` and not `license_id`
     * @param int $userId the ID of the user that must be removed from the license
     */
    public function __construct(int $id, int $userId)
    {
        $this->id = $id;
        $this->user_id = $userId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{user_id}'], [$this->id, $this->user_id], '/api/licenses/{id}/{user_id}/');
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
     * @return null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\AdminRemoveUserFromLicenseBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\AdminRemoveUserFromLicenseNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\AdminRemoveUserFromLicenseBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiLicensesIdUserIdDeleteResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\AdminRemoveUserFromLicenseNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiLicensesIdUserIdDeleteResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
