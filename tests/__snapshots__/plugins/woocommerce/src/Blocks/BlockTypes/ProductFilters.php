<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductFilters class.
 */
class ProductFilters
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filters';

    /**
     * Register the context.
     *
     * @return string[]
     */
    protected function get_block_type_uses_context()
    {
        // stub
    }

    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = array (
))
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
     * Get SVG icon markup for a given icon name.
     *
     * @param string $name The name of the icon to retrieve.
     * @return string SVG markup for the icon, or empty string if icon not found.
     */
    private function get_svg_icon(string $name)
    {
        // stub
    }

    /**
     * Generate a unique navigation ID for the block.
     *
     * @param mixed $block - Block instance.
     * @return string - Unique navigation ID.
     */
    private function generate_navigation_id($block)
    {
        // stub
    }

    /**
     * Parse the filter parameters from the URL.
     * For now we only get the global query params from the URL. In the future,
     * we should get the query params based on $query_id.
     *
     * @param int $query_id Query ID.
     * @return array Parsed filter params.
     */
    private function get_filter_params($query_id)
    {
        // stub
    }

}

