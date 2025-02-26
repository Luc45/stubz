<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductGalleryPager class.
 */
class ProductGalleryPager extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-gallery-pager';

    /**
     * It isn't necessary register block assets because it is a server side block.
     */
    protected function register_block_type_assets()
    {
        // stub
    }

    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
        // stub
    }

    /**
     *  Register the context
     *
     * @return string[]
     */
    protected function get_block_type_uses_context()
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

    /**
     * Renders the pager for the product gallery.
     *
     * @param  array  $product_gallery_images_ids An array of image IDs for the product gallery.
     * @param  string $pager_display_mode         The display mode for the pager.
     * @param  int    $number_of_thumbnails       The number of thumbnails to display in the pager.
     * @return string|null The rendered pager HTML, or null if the pager should not be displayed.
     */
    private function render_pager($product_gallery_images_ids, $pager_display_mode, $number_of_thumbnails)
    {
        // stub
    }

    /**
     * Renders the pager pages for the product gallery.
     *
     * @param  array  $product_gallery_images_ids An array of image IDs for the product gallery.
     * @param  int    $number_of_thumbnails The number of thumbnails to display in the pager.
     * @param  string $pager_display_mode The display mode for the pager. Defaults to 'dots'.
     * @return string The rendered pager pages HTML.
     */
    private function render_pager_pages($product_gallery_images_ids, $number_of_thumbnails, $pager_display_mode = 'dots')
    {
        // stub
    }

    /**
     * Generates an SVG dot icon with the specified opacity.
     *
     * @param bool $is_active Whether the dot icon should be in active state. Defaults to false.
     * @return string The SVG dot icon HTML.
     */
    private function get_dot_icon($is_active = false)
    {
        // stub
    }

}

