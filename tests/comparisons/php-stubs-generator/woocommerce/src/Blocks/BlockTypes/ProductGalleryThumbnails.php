<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductGalleryThumbnails class.
 */
class ProductGalleryThumbnails extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-gallery-thumbnails';
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
     * Generate the View All markup.
     *
     * @param int $remaining_thumbnails_count The number of thumbnails that are not displayed.
     *
     * @return string
     */
    protected function generate_view_all_html($remaining_thumbnails_count)
    {
    }
    /**
     * Inject View All markup into the product thumbnail HTML.
     *
     * @param string $thumbnail_html The thumbnail HTML.
     * @param string $view_all_html  The view all HTML.
     *
     * @return string
     */
    protected function inject_view_all($thumbnail_html, $view_all_html)
    {
    }
    /**
     * Check if the thumbnails should be limited.
     *
     * @param string $mode                 Mode of the gallery. Expected values: 'standard'.
     * @param int    $thumbnails_count     Current count of processed thumbnails.
     * @param int    $number_of_thumbnails Number of thumbnails configured to display.
     *
     * @return bool
     */
    protected function should_limit_thumbnails($mode, $thumbnails_count, $number_of_thumbnails)
    {
    }
    /**
     * Check if View All markup should be displayed.
     *
     * @param string $mode                   Mode of the gallery. Expected values: 'standard'.
     * @param int    $thumbnails_count       Current count of processed thumbnails.
     * @param array  $product_gallery_images Array of product gallery image HTML strings.
     * @param int    $number_of_thumbnails   Number of thumbnails configured to display.
     *
     * @return bool
     */
    protected function should_display_view_all($mode, $thumbnails_count, $product_gallery_images, $number_of_thumbnails)
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