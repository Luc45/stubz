<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductGalleryLargeImage class.
 */
class ProductGalleryLargeImage extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-gallery-large-image';
    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
{
}
    /**
     *  Register the context
     *
     * @return string[]
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
     * Get the main images html code. The first element of the array contains the HTML of the first image that is visible, the second element contains the HTML of the other images that are hidden.
     *
     * @param array $context The block context.
     * @param int   $product_id The product id.
     *
     * @return array
     */
    private function get_main_images_html($context, $product_id)
{
}
    /**
     * Get directives for the block.
     *
     * @param array $block_context The block context.
     *
     * @return array
     */
    private function get_directives($block_context)
{
}
    /**
     * Get directives for zoom.
     *
     * @param array $block_context The block context.
     *
     * @return array
     */
    private function get_zoom_directives($block_context)
{
}
    /**
     * Get directives for opening the dialog.
     *
     * @param array $block_context The block context.
     *
     * @return array
     */
    private function get_open_dialog_directives($block_context)
{
}
}