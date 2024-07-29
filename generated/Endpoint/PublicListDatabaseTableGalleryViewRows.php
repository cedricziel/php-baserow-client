<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class PublicListDatabaseTableGalleryViewRows extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $slug;

    /**
     * Lists the requested rows of the view's table related to the provided `slug` if the gallery view is public.The response is paginated either by a limit/offset or page/size style. The style depends on the provided GET parameters. The properties of the returned rows depends on which fields the table has. For a complete overview of fields use the **list_database_table_fields** endpoint to list them all. In the example all field types are listed, but normally the number in field_{id} key is going to be the id of the field. The value is what the user has provided and the format of it depends on the fields type.
     *
     * @param string $slug            returns only rows that belong to the related view
     * @param array  $queryParameters {
     *
     * @var bool   $count if provided only the count will be returned
     * @var string $exclude_fields All the fields are included in the response by default. You can select a subset of fields by providing the exclude_fields query parameter. If you for example provide the following GET parameter `exclude_fields=field_1,field_2` then the fields with id `1` and id `2` are going to be excluded from the selection and response.
     * @var string $filter__{field}__{filter} The rows can optionally be filtered by the same view filters available for the views. Multiple filters can be provided if they follow the same format. The field and filter variable indicate how to filter and the value indicates where to filter on.
     *
     * Please note that if the `filters` parameter is provided, this parameter will be ignored.
     *
     * For example if you provide the following GET parameter `filter__field_1__equal=test` then only rows where the value of field_1 is equal to test are going to be returned.
     *
     * The following filters are available: equal, not_equal, filename_contains, files_lower_than, has_file_type, contains, contains_not, contains_word, doesnt_contain_word, length_is_lower_than, higher_than, higher_than_or_equal, lower_than, lower_than_or_equal, is_even_and_whole, date_equal, date_before, date_before_or_equal, date_after_days_ago, date_after, date_after_or_equal, date_not_equal, date_equals_today, date_before_today, date_after_today, date_within_days, date_within_weeks, date_within_months, date_equals_days_ago, date_equals_months_ago, date_equals_years_ago, date_equals_week, date_equals_month, date_equals_day_of_month, date_equals_year, date_is, date_is_not, date_is_before, date_is_on_or_before, date_is_after, date_is_on_or_after, date_is_within, single_select_equal, single_select_not_equal, single_select_is_any_of, single_select_is_none_of, link_row_has, link_row_has_not, link_row_contains, link_row_not_contains, boolean, empty, not_empty, multiple_select_has, multiple_select_has_not, multiple_collaborators_has, multiple_collaborators_has_not, user_is, user_is_not.
     * @var string $filter_type `AND`: Indicates that the rows must match all the provided filters.
     *             `OR`: Indicates that the rows only have to match one of the filters.
     *
     * This works only if two or more filters are provided.Please note that if the `filters` parameter is provided, this parameter will be ignored.
     * @var string $filters A JSON serialized string containing the filter tree to apply to this view. The filter tree is a nested structure containing the filters that need to be applied.
     *
     * Please note that if this parameter is provided, all other `filter__{field}__{filter}` will be ignored, as well as the `filter_type` parameter.
     *
     * An example of a valid filter tree is the following:`{"filter_type": "AND", "filters": [{"field": 1, "type": "equal", "value": "test"}]}`.
     *
     * The following filters are available: equal, not_equal, filename_contains, files_lower_than, has_file_type, contains, contains_not, contains_word, doesnt_contain_word, length_is_lower_than, higher_than, higher_than_or_equal, lower_than, lower_than_or_equal, is_even_and_whole, date_equal, date_before, date_before_or_equal, date_after_days_ago, date_after, date_after_or_equal, date_not_equal, date_equals_today, date_before_today, date_after_today, date_within_days, date_within_weeks, date_within_months, date_equals_days_ago, date_equals_months_ago, date_equals_years_ago, date_equals_week, date_equals_month, date_equals_day_of_month, date_equals_year, date_is, date_is_not, date_is_before, date_is_on_or_before, date_is_after, date_is_on_or_after, date_is_within, single_select_equal, single_select_not_equal, single_select_is_any_of, single_select_is_none_of, link_row_has, link_row_has_not, link_row_contains, link_row_not_contains, boolean, empty, not_empty, multiple_select_has, multiple_select_has_not, multiple_collaborators_has, multiple_collaborators_has_not, user_is, user_is_not.
     * @var string $include A comma separated list allowing the values of `field_options` which will add the object/objects with the same name to the response if included. The `field_options` object contains user defined view settings for each field. For example the field's width is included in here.
     * @var string $include_fields All the fields are included in the response by default. You can select a subset of fields by providing the fields query parameter. If you for example provide the following GET parameter `include_fields=field_1,field_2` then only the fields with id `1` and id `2` are going to be selected and included in the response.
     * @var int    $limit defines how many rows should be returned
     * @var int    $offset can only be used in combination with the `limit` parameter and defines from which offset the rows should be returned
     * @var string $order_by Optionally the rows can be ordered by provided field ids separated by comma. By default a field is ordered in ascending (A-Z) order, but by prepending the field with a '-' it can be ordered descending (Z-A).
     * @var int    $page Defines which page of rows should be returned. Either the `page` or `limit` can be provided, not both.
     * @var string $search if provided only rows with data that matches the search query are going to be returned
     * @var string $search_mode If provided, allows API consumers to determine what kind of search experience they wish to have. If the default `SearchModes.MODE_FT_WITH_COUNT` is used, then Postgres full-text search is used. If `SearchModes.MODE_COMPAT` is provided then the search term will be exactly searched for including whitespace on each cell. This is the Baserow legacy search behaviour.
     * @var int    $size Can only be used in combination with the `page` parameter and defines how many rows should be returned.
     *             }
     */
    public function __construct(string $slug, array $queryParameters = [])
    {
        $this->slug = $slug;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{slug}'], [$this->slug], '/api/database/views/gallery/{slug}/public/rows/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['count', 'exclude_fields', 'filter__{field}__{filter}', 'filter_type', 'filters', 'include', 'include_fields', 'limit', 'offset', 'order_by', 'page', 'search', 'search_mode', 'size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('count', ['bool']);
        $optionsResolver->addAllowedTypes('exclude_fields', ['string']);
        $optionsResolver->addAllowedTypes('filter__{field}__{filter}', ['string']);
        $optionsResolver->addAllowedTypes('filter_type', ['string']);
        $optionsResolver->addAllowedTypes('filters', ['string']);
        $optionsResolver->addAllowedTypes('include', ['string']);
        $optionsResolver->addAllowedTypes('include_fields', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('order_by', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('search', ['string']);
        $optionsResolver->addAllowedTypes('search_mode', ['string']);
        $optionsResolver->addAllowedTypes('size', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \cedricziel\phpbaserowclient\Generated\Model\PublicPaginationSerializerWithGalleryViewFieldOptionsExampleRowResponse|null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\PublicListDatabaseTableGalleryViewRowsBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\PublicListDatabaseTableGalleryViewRowsUnauthorizedException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\PublicListDatabaseTableGalleryViewRowsNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\PublicPaginationSerializerWithGalleryViewFieldOptionsExampleRowResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\PublicListDatabaseTableGalleryViewRowsBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGallerySlugPublicRowsGetResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\PublicListDatabaseTableGalleryViewRowsUnauthorizedException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGallerySlugPublicRowsGetResponse401', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\PublicListDatabaseTableGalleryViewRowsNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGallerySlugPublicRowsGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
