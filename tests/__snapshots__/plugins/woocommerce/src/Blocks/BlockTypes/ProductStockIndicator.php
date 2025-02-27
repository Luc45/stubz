<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductStockIndicator class.
 */
class ProductStockIndicator
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-stock-indicator';

    /**
     * API version name.
     *
     * @var string
     */
    protected $api_version = '3';

    /**
     * Register script and style assets for the block type before it is registered.
     *
     * This registers the scripts; it does not enqueue them.
     */
    protected function register_block_type_assets()
    {
        // stub
    }

    /**
     * Register the context.
     */
    protected function get_block_type_uses_context()
    {
        // stub
    }

    /**
     * Get product types that should not display stock indicators.
     *
     * @return array
     */
    protected function get_product_types_without_stock_indicator()
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

}