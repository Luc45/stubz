<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * Utility methods used for the Product Gallery block.
 * {@internal This class and its methods are not intended for public use.}
 */
class ProductGalleryUtils
{
    public const CROP_IMAGE_SIZE_NAME = '_woo_blocks_product_gallery_crop_full';
    /**
     * When requesting a full-size image, this function may return an array with a single image.
     * However, when requesting a non-full-size image, it will always return an array with multiple images.
     * This distinction is based on the image size needed for rendering purposes:
     * - "Full" size is used for the main product featured image.
     * - Non-full sizes are used for rendering thumbnails.
     *
     * @param int    $post_id Post ID.
     * @param string $size Image size.
     * @param array  $attributes Attributes.
     * @param string $wrapper_class Wrapper class.
     * @param bool   $crop_images Whether to crop images.
     * @return array
     */
    public static function get_product_gallery_images($post_id, $size = 'full', $attributes = array(), $wrapper_class = '', $crop_images = false)
    {
    }
    /**
     * Get the product gallery image IDs.
     *
     * @param \WC_Product $product                      The product object to retrieve the gallery images for.
     * @param int         $max_number_of_visible_images The maximum number of visible images to return. Defaults to 8.
     * @param bool        $only_visible                 Whether to return only the visible images. Defaults to false.
     * @return array An array of unique image IDs for the product gallery.
     */
    public static function get_product_gallery_image_ids($product, $max_number_of_visible_images = 8, $only_visible = false)
    {
    }
    /**
     * Generates the intermediate image sizes only when needed.
     *
     * @param int    $attachment_id Attachment ID.
     * @param string $size Image size.
     * @return void
     */
    public static function maybe_generate_intermediate_image($attachment_id, $size)
    {
    }
    /**
     * Get the product image placeholder HTML.
     *
     * @param string $size Image size.
     * @param array  $attributes Attributes.
     * @param bool   $crop_images Whether to crop images.
     * @return string
     */
    public static function get_product_image_placeholder_html($size, $attributes, $crop_images)
    {
    }
}
