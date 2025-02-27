<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * FeaturedProduct class.
 */
class FeaturedProduct
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'featured-product';

    /**
     * Returns the featured product.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return \WP_Term|null
     */
    protected function get_item($attributes)
    {
        // stub
    }

    /**
     * Returns the name of the featured product.
     *
     * @param \WC_Product $product Product object.
     * @return string
     */
    protected function get_item_title($product)
    {
        // stub
    }

    /**
     * Returns the featured product image URL.
     *
     * @param \WC_Product $product Product object.
     * @param string      $size    Image size, defaults to 'full'.
     * @return string
     */
    protected function get_item_image($product, $size = 'full')
    {
        // stub
    }

    /**
     * Renders the featured product attributes.
     *
     * @param \WC_Product $product Product object.
     * @param array       $attributes Block attributes. Default empty array.
     * @return string
     */
    protected function render_attributes($product, $attributes)
    {
        // stub
    }

}