<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * FeaturedCategory class.
 */
class FeaturedCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\FeaturedItem
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'featured-category';
    /**
     * Get block attributes.
     *
     * @return array
     */
    protected function get_block_type_attributes()
    {
    }
    /**
     * Returns the featured category.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return \WP_Term|null
     */
    protected function get_item($attributes)
    {
    }
    /**
     * Returns the name of the featured category.
     *
     * @param \WP_Term $category Featured category.
     * @return string
     */
    protected function get_item_title($category)
    {
    }
    /**
     * Returns the featured category image URL.
     *
     * @param \WP_Term $category Term object.
     * @param string   $size Image size, defaults to 'full'.
     * @return string
     */
    protected function get_item_image($category, $size = 'full')
    {
    }
    /**
     * Renders the featured category attributes.
     *
     * @param \WP_Term $category Term object.
     * @param array    $attributes Block attributes. Default empty array.
     * @return string
     */
    protected function render_attributes($category, $attributes)
    {
    }
}