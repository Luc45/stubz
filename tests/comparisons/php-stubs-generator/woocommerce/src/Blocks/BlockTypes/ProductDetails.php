<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductDetails class.
 */
class ProductDetails extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-details';
    /**
     * It isn't necessary register block assets because it is a server side block.
     */
    protected function register_block_type_assets()
    {
    }
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Gets the tabs with their content to be rendered by the block.
     *
     * @return string The tabs html to be rendered by the block
     */
    protected function render_tabs()
    {
    }
}