<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Product Filter: Price Block.
 */
final class ProductFilterPrice extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    public const MIN_PRICE_QUERY_VAR = 'min_price';
    public const MAX_PRICE_QUERY_VAR = 'max_price';
    /**
     * Register the query param keys.
     *
     * @param array $filter_param_keys The active filters data.
     * @param array $url_param_keys    The query param parsed from the URL.
     *
     * @return array Active filters param keys.
     */
    public function get_filter_query_param_keys($filter_param_keys, $url_param_keys)
    {
    }
    /**
     * Register the active filters data.
     *
     * @param array $data   The active filters data.
     * @param array $params The query param parsed from the URL.
     * @return array Active filters data.
     */
    public function register_active_filters_data($data, $params)
    {
    }
}
