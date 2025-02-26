<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * FeaturedItem class.
 */
abstract class FeaturedItem
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = null;

    /**
     * Default attribute values.
     *
     * @var array
     */
    protected $defaults = array (
  'align' => 'none',
);

    /**
     * Global style enabled for this block.
     *
     * @var array
     */
    protected $global_style_wrapper = array (
  0 => 'background_color',
  1 => 'border_color',
  2 => 'border_radius',
  3 => 'border_width',
  4 => 'font_size',
  5 => 'padding',
  6 => 'text_color',
  7 => 'extra_classes',
);

    /**
     * Returns the featured item.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return \WP_Term|\WC_Product|null
     */
    protected abstract function get_item($attributes);

    /**
     * Returns the name of the featured item.
     *
     * @param \WP_Term|\WC_Product $item Item object.
     * @return string
     */
    protected abstract function get_item_title($item);

    /**
     * Returns the featured item image URL.
     *
     * @param \WP_Term|\WC_Product $item Item object.
     * @param string               $size Image size, defaults to 'full'.
     * @return string
     */
    protected abstract function get_item_image($item, $size = 'full');

    /**
     * Renders the featured item attributes.
     *
     * @param \WP_Term|\WC_Product $item       Item object.
     * @param array                $attributes Block attributes. Default empty array.
     * @return string
     */
    protected abstract function render_attributes($item, $attributes);

    /**
     * Render the featured item block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
        // stub
    }

    /**
     * Returns the url the item's image
     *
     * @param array                $attributes Block attributes. Default empty array.
     * @param \WP_Term|\WC_Product $item       Item object.
     *
     * @return string
     */
    private function get_image_url($attributes, $item)
    {
        // stub
    }

    /**
     * Renders the featured image as a div background.
     *
     * @param array  $attributes Block attributes. Default empty array.
     * @param string $image_url  Item image url.
     *
     * @return string
     */
    private function render_bg_image($attributes, $image_url)
    {
        // stub
    }

    /**
     * Get the styles for the wrapper element (background image, color).
     *
     * @param array  $attributes Block attributes. Default empty array.
     * @param string $image_url  Item image url.
     *
     * @return string
     */
    public function get_bg_styles($attributes, $image_url)
    {
        // stub
    }

    /**
     * Renders the featured image
     *
     * @param array                $attributes Block attributes. Default empty array.
     * @param \WC_Product|\WP_Term $item       Item object.
     * @param string               $image_url  Item image url.
     *
     * @return string
     */
    private function render_image($attributes, $item, string $image_url)
    {
        // stub
    }

    /**
     * Get the styles for the wrapper element (background image, color).
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return string
     */
    public function get_styles($attributes)
    {
        // stub
    }

    /**
     * Get class names for the block container.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return string
     */
    public function get_classes($attributes)
    {
        // stub
    }

    /**
     * Renders the block overlay
     *
     * @param array $attributes Block attributes. Default empty array.
     *
     * @return string
     */
    private function render_overlay($attributes)
    {
        // stub
    }

    /**
     * Returns whether the focal point is defined for the block.
     *
     * @param array $attributes Block attributes. Default empty array.
     *
     * @return bool
     */
    private function hasFocalPoint($attributes): bool
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

}

