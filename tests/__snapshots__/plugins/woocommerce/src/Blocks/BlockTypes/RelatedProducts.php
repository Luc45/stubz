<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * RelatedProducts class.
 */
class RelatedProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'related-products';
    /**
     * The Block with its attributes before it gets rendered
     *
     * @var array
     */
    protected $parsed_block = null;
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     * - Hook into pre_render_block to update the query.
     */
    protected function initialize()
{
}
    /**
     * It isn't necessary register block assets because it is a server side block.
     */
    protected function register_block_type_assets()
{
}
    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
{
}
    /**
     * Update the query for the product query block.
     *
     * @param string|null $pre_render   The pre-rendered content. Default null.
     * @param array       $parsed_block The block being rendered.
     */
    public function update_query($pre_render, $parsed_block)
{
}
    /**
     * Return a custom query based on attributes, filters and global WP_Query.
     *
     * @param WP_Query $query The WordPress Query.
     * @param WP_Block $block The block being rendered.
     * @return array
     */
    public function build_query($query, $block = null)
{
}
    /**
     * If there are no related products, return an empty string.
     *
     * @param string $content The block content.
     * @param array  $block The block.
     *
     * @return string The block content.
     */
    public function render_block(string $content, array $block)
{
}
}