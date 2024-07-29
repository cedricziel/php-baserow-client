<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Endpoint;

class GetDatabaseTableGridViewFieldAggregations extends \cedricziel\phpbaserowclient\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\phpbaserowclient\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\phpbaserowclient\Generated\Runtime\Client\EndpointTrait;
    protected $view_id;

    /**
     * Returns all field aggregations values previously defined for this grid view. If filters exist for this view, the aggregations are computed only on filtered rows.You need to have read permissions on the view to request aggregations.
     *
     * @param int   $viewId          select the view you want the aggregations for
     * @param array $queryParameters {
     *
     * @var string $filter__{field}__{filter} The aggregation can optionally be filtered by the same view filters available for the views. Multiple filters can be provided if they follow the same format. The field and filter variable indicate how to filter and the value indicates where to filter on.
     *
     * Please note that if the `filters` parameter is provided, this parameter will be ignored.
     *
     * For example if you provide the following GET parameter `filter__field_1__equal=test` then only rows where the value of field_1 is equal to test are going to be returned.
     *
     * The following filters are available: equal, not_equal, filename_contains, files_lower_than, has_file_type, contains, contains_not, contains_word, doesnt_contain_word, length_is_lower_than, higher_than, higher_than_or_equal, lower_than, lower_than_or_equal, is_even_and_whole, date_equal, date_before, date_before_or_equal, date_after_days_ago, date_after, date_after_or_equal, date_not_equal, date_equals_today, date_before_today, date_after_today, date_within_days, date_within_weeks, date_within_months, date_equals_days_ago, date_equals_months_ago, date_equals_years_ago, date_equals_week, date_equals_month, date_equals_day_of_month, date_equals_year, date_is, date_is_not, date_is_before, date_is_on_or_before, date_is_after, date_is_on_or_after, date_is_within, single_select_equal, single_select_not_equal, single_select_is_any_of, single_select_is_none_of, link_row_has, link_row_has_not, link_row_contains, link_row_not_contains, boolean, empty, not_empty, multiple_select_has, multiple_select_has_not, multiple_collaborators_has, multiple_collaborators_has_not, user_is, user_is_not.Please note that by passing the filter parameters the view filters saved for the view itself will be ignored.
     * @var string $filter_type `AND`: Indicates that the aggregated rows must match all the provided filters.
     *             `OR`: Indicates that the aggregated rows only have to match one of the filters.
     *
     * This works only if two or more filters are provided.Please note that if the `filters` parameter is provided, this parameter will be ignored.
     * @var string $filters A JSON serialized string containing the filter tree to apply for the aggregation. The filter tree is a nested structure containing the filters that need to be applied.
     *
     * An example of a valid filter tree is the following:`{"filter_type": "AND", "filters": [{"field": 1, "type": "equal", "value": "test"}]}`.
     *
     * The following filters are available: equal, not_equal, filename_contains, files_lower_than, has_file_type, contains, contains_not, contains_word, doesnt_contain_word, length_is_lower_than, higher_than, higher_than_or_equal, lower_than, lower_than_or_equal, is_even_and_whole, date_equal, date_before, date_before_or_equal, date_after_days_ago, date_after, date_after_or_equal, date_not_equal, date_equals_today, date_before_today, date_after_today, date_within_days, date_within_weeks, date_within_months, date_equals_days_ago, date_equals_months_ago, date_equals_years_ago, date_equals_week, date_equals_month, date_equals_day_of_month, date_equals_year, date_is, date_is_not, date_is_before, date_is_on_or_before, date_is_after, date_is_on_or_after, date_is_within, single_select_equal, single_select_not_equal, single_select_is_any_of, single_select_is_none_of, link_row_has, link_row_has_not, link_row_contains, link_row_not_contains, boolean, empty, not_empty, multiple_select_has, multiple_select_has_not, multiple_collaborators_has, multiple_collaborators_has_not, user_is, user_is_not.Please note that by passing the filters parameter the view filters saved for the view itself will be ignored.
     * @var string $include if `include` is set to `total`, the total row count will be returned with the result
     * @var string $search if provided the aggregations are calculated only for matching rows
     * @var string $search_mode If provided, allows API consumers to determine what kind of search experience they wish to have. If the default `SearchModes.MODE_FT_WITH_COUNT` is used, then Postgres full-text search is used. If `SearchModes.MODE_COMPAT` is provided then the search term will be exactly searched for including whitespace on each cell. This is the Baserow legacy search behaviour.
     *             }
     */
    public function __construct(int $viewId, array $queryParameters = [])
    {
        $this->view_id = $viewId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{view_id}'], [$this->view_id], '/api/database/views/grid/{view_id}/aggregations/');
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
        $optionsResolver->setDefined(['filter__{field}__{filter}', 'filter_type', 'filters', 'include', 'search', 'search_mode']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter__{field}__{filter}', ['string']);
        $optionsResolver->addAllowedTypes('filter_type', ['string']);
        $optionsResolver->addAllowedTypes('filters', ['string']);
        $optionsResolver->addAllowedTypes('include', ['string']);
        $optionsResolver->addAllowedTypes('search', ['string']);
        $optionsResolver->addAllowedTypes('search_mode', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridViewIdAggregationsGetResponse200|null
     *
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\GetDatabaseTableGridViewFieldAggregationsBadRequestException
     * @throws \cedricziel\phpbaserowclient\Generated\Exception\GetDatabaseTableGridViewFieldAggregationsNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridViewIdAggregationsGetResponse200', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\GetDatabaseTableGridViewFieldAggregationsBadRequestException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridViewIdAggregationsGetResponse400', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\phpbaserowclient\Generated\Exception\GetDatabaseTableGridViewFieldAggregationsNotFoundException($serializer->deserialize($body, 'cedricziel\phpbaserowclient\Generated\Model\ApiDatabaseViewsGridViewIdAggregationsGetResponse404', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
