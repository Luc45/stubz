<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductGalleryLargeImage class.
 */
class ProductGalleryLargeImageNextPrevious extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-gallery-large-image-next-previous';

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
     *  Register the context
     *
     * @return string[]
     */
    protected function get_block_type_uses_context()
{
}
    /**
     *  Return class suffix
     *
     * @param array $context Block context.
     * @return string
     */
    private function get_class_suffix($context)
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
     * Generates the HTML for a next or previous button for the product gallery large image.
     *
     * @param string $button_type The type of button to generate. Either 'previous' or 'next'.
     * @param string $context     The block context.
     * @return string The HTML for the generated button.
     */
    protected function get_button($button_type, $context)
{
}
    /**
     * Returns an HTML button element with an SVG icon for the previous or next button when the buttons are inside the image.
     *
     * @param string $button_type The type of button to return. Either "previous" or "next".
     * @param string $context The context in which the button is being used.
     * @return string The HTML for the button element.
     */
    protected function get_inside_button($button_type, $context)
{
}
    /**
     * Returns an HTML button element with an SVG icon for the previous or next button when the buttons are outside the image.
     *
     * @param string $button_type The type of button to return. Either "previous" or "next".
     * @param string $context The context in which the button is being used.
     * @return string The HTML for the button element.
     */
    protected function get_outside_button($button_type, $context)
{
}
}