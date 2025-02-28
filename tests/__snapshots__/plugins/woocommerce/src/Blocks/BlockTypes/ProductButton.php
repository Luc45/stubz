<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductButton class.
 */
class ProductButton
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-button';

    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     */
    protected function get_block_type_script($key = null)
{
}
    /**
     * Register the context.
     */
    protected function get_block_type_uses_context()
{
}
    /**
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @param array    $attributes  Any attributes that currently are available from the block.
     * @param string   $content    The block content.
     * @param WP_Block $block    The block object.
     */
    protected function enqueue_assets(array $attributes, $content, $block)
{
}
    /**
     * Dequeue the add-to-cart script.
     * The block uses Interactivity API, it isn't necessary enqueue the add-to-cart script.
     */
    public function dequeue_add_to_cart_scripts()
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
    /**
     * Get the number of items in the cart for a given product id.
     *
     * @param number $product_id The product id.
     * @return number The number of items in the cart.
     */
    private function get_cart_item_quantities_by_product_id($product_id)
{
}
    /**
     * Prevent caching on certain pages
     */
    private function prevent_cache()
{
}
    /**
     * Get the view cart link html.
     *
     * @return string The view cart html.
     */
    private function get_view_cart_html()
{
}
}