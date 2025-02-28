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
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filter-price';
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     */
    protected function initialize()
{
}
    /**
     * Prepare the active filter items.
     *
     * @param array $items  The active filter items.
     * @param array $params The query param parsed from the URL.
     * @return array Active filters items.
     */
    public function prepare_selected_filters($items, $params)
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
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
{
}
}