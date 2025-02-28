<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CatalogSorting class.
 */
class AddToCartWithOptionsQuantitySelector extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-quantity-selector';

    /**
     * Get the block's attributes.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return array  Block attributes merged with defaults.
     */
    private function parse_attributes($attributes)
{
}
    /**
     * Enqueue assets specific to this block.
     * We enqueue frontend scripts only if the quantitySelectorStyle is set to 'stepper'.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     */
    protected function enqueue_assets($attributes, $content, $block)
{
}
    /**
     * Add increment and decrement buttons to the quantity input field.
     *
     * @param string $product_html Quantity input HTML.
     * @param string $product_name Product name.
     * @return stringa Quantity input HTML with increment and decrement buttons.
     */
    private function add_steppers($product_html, $product_name)
{
}
    /**
     * Add classes to the Quantity Selector needed for the stepper style.
     *
     * @param string $product_html The Quantity Selector HTML.
     *
     * @return string The Quantity Selector HTML with classes added.
     */
    private function add_stepper_classes($product_html)
{
}
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string | void Rendered block output.
     */
    protected function render($attributes, $content, $block)
{
}
}