<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Product Filter: Clear Button Block.
 */
final class ProductFilterClearButton
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filter-clear-button';

    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
{
}
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     *
     * @return null
     */
    protected function get_block_type_script($key = null)
{
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
}
}