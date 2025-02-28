<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Product Filter: Attribute Block.
 */
final class ProductFilterAttribute extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Delete the default attribute id transient when the attribute taxonomies are deleted.
     *
     * @param string $transient The transient name.
     */
    public function delete_default_attribute_id_transient($transient)
    {
    }
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
    /**
     * Register pattern for default product attribute.
     */
    public function register_block_patterns()
    {
    }
}