<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Block type for variation selector in add to cart with options.
 */
class AddToCartWithOptionsVariationSelector extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-variation-selector';
    /**
     * Render variation label.
     *
     * @param string $attribute_name Name of the attribute.
     * @return string Rendered label HTML.
     */
    protected function render_variation_label($attribute_name): string
{
}
    /**
     * Render variation selector dropdown.
     *
     * @param WC_Product $product The product object.
     * @param string     $attribute_name Name of the attribute.
     * @param array      $options Available options for this attribute.
     * @return string Rendered dropdown HTML.
     */
    protected function render_variation_selector($product, $attribute_name, $options): string
{
}
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     * @return string Rendered block output.
     */
    protected function render($attributes, $content, $block): string
{
}
}