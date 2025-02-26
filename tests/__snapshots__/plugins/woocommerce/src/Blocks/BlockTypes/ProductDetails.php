<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductDetails class.
 */
class ProductDetails
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
        // stub
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
        // stub
    }

    /**
     * Gets the tabs with their content to be rendered by the block.
     *
     * @return string The tabs html to be rendered by the block
     */
    protected function render_tabs()
    {
        // stub
    }

}

