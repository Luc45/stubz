<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Product Filter: Rating Block
 *
 * @package Automattic\WooCommerce\Blocks\BlockTypes
 */
final class ProductFilterRating
{
    const RATING_FILTER_QUERY_VAR = 'rating_filter';

    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filter-rating';

    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     */
    protected function initialize()
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Include and render the block.
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
        // stub
    }

    /**
     * Render the rating label.
     *
     * @param int    $rating The rating to render.
     * @param string $count_label The count label to render.
     * @return string|false
     */
    private function render_rating_label($rating, $count_label)
    {
        // stub
    }

    /**
     * Retrieve the rating filter data for current block.
     *
     * @param WP_Block $block Block instance.
     */
    private function get_rating_counts($block)
    {
        // stub
    }

}