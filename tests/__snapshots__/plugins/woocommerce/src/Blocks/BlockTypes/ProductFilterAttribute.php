<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Product Filter: Attribute Block.
 */
final class ProductFilterAttribute
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filter-attribute';

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
     * Delete the default attribute id transient when the attribute taxonomies are deleted.
     *
     * @param string $transient The transient name.
     */
    public function delete_default_attribute_id_transient($transient)
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
     * Render the block.
     *
     * @param array    $block_attributes Block attributes.
     * @param string   $content          Block content.
     * @param WP_Block $block            Block instance.
     * @return string Rendered block type output.
     */
    protected function render($block_attributes, $content, $block)
    {
        // stub
    }

    /**
     * Retrieve the attribute count for current block.
     *
     * @param WP_Block $block      Block instance.
     * @param string   $slug       Attribute slug.
     * @param string   $query_type Query type, accept 'and' or 'or'.
     */
    private function get_attribute_counts($block, $slug, $query_type)
    {
        // stub
    }

    /**
     * Get the attribute if with most term but closest to 30 terms.
     *
     * @return object
     */
    private function get_default_product_attribute()
    {
        // stub
    }

    /**
     * Register pattern for default product attribute.
     */
    public function register_block_patterns()
    {
        // stub
    }

}