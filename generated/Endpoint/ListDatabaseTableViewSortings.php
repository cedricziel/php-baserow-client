<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Endpoint;

class ListDatabaseTableViewSortings extends \CedricZiel\Baserow\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\Baserow\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\Baserow\Generated\Runtime\Client\EndpointTrait;
    protected $view_id;

    /**
     * Lists all sortings of the view related to the provided `view_id` if the user has access to the related database's workspace. A view can have multiple sortings. When all the rows are requested they will be in the desired order.
     *
     * @param int $viewId returns only sortings of the view related to the provided value
     */
    public function __construct(int $viewId)
    {
        $this->view_id = $viewId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{view_id}'], [$this->view_id], '/api/database/views/{view_id}/sortings/');
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
     * @return \CedricZiel\Baserow\Generated\Model\ViewSort[]|null
     *
     * @throws \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableViewSortingsBadRequestException
     * @throws \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableViewSortingsNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ViewSort[]', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableViewSortingsBadRequestException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsViewIdSortingsGetResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\Baserow\Generated\Exception\ListDatabaseTableViewSortingsNotFoundException($serializer->deserialize($body, 'CedricZiel\Baserow\Generated\Model\ApiDatabaseViewsViewIdSortingsGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
