<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Classic Shortcode class
 *
 * @internal
 */
class ClassicShortcode extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'classic-shortcode';

    /**
     * API version.
     *
     * @var string
     */
    protected $api_version = '3';

    /**
     * Render method for the Classic Template block. This method will determine which template to render.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string | void Rendered block type output.
     */
    protected function render($attributes, $content, $block)
{
}
    /**
     * Get the list of classes to apply to this block.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return string space-separated list of classes.
     */
    protected function get_container_classes($attributes = array())
{
}
    /**
     * Render method for rendering the cart shortcode.
     *
     * @param array $attributes Block attributes.
     * @return string Rendered block type output.
     */
    protected function render_cart($attributes)
{
}
    /**
     * Render method for rendering the checkout shortcode.
     *
     * @param array $attributes Block attributes.
     * @return string Rendered block type output.
     */
    protected function render_checkout($attributes)
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
}