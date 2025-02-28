<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductSaleBadge class.
 */
class ProductSaleBadge extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-sale-badge';
    /**
     * API version name.
     *
     * @var string
     */
    protected $api_version = '3';
    /**
     * Get block attributes.
     *
     * @return array
     */
    protected function get_block_type_supports()
{
}
    /**
     * Overwrite parent method to prevent script registration.
     *
     * It is necessary to register and enqueues assets during the render
     * phase because we want to load assets only if the block has the content.
     */
    protected function register_block_type_assets()
{
}
    /**
     * Register the context.
     */
    protected function get_block_type_uses_context()
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