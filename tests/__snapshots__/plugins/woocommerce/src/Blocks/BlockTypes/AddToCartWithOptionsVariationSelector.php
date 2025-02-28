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
     * Get selected attribute value.
     *
     * @param WC_Product $product The product object.
     * @param string     $attribute_name Name of the attribute.
     * @return string Selected value
     */
    private function get_selected_attribute_value($product, $attribute_name): string
{
}
    /**
     * Get HTML for variation options.
     *
     * @param WC_Product $product The product object.
     * @param string     $attribute_name Name of the attribute.
     * @param array      $options Available options.
     * @param string     $selected Selected value.
     * @param bool       $is_taxonomy Whether this is a taxonomy-based attribute.
     * @return string Options HTML
     */
    private function get_variation_options_html($product, $attribute_name, $options, $selected, $is_taxonomy): string
{
}
    /**
     * Render variation form.
     *
     * @param WC_Product $product Product instance.
     * @param array      $attributes Block attributes.
     * @return string Rendered form HTML
     */
    private function render_variation_form($product, $attributes): string
{
}
    /**
     * Get variations data.
     *
     * @param WC_Product $product Product instance.
     * @return array|false
     */
    private function get_variations_data($product)
{
}
    /**
     * Get form HTML.
     *
     * @param WC_Product $product Product instance.
     * @param array      $variations Variations data.
     * @param array      $variation_attributes Variation attributes.
     * @return string Form HTML
     */
    private function get_form_html($product, $variations, $variation_attributes): string
{
}
    /**
     * Get form opening HTML.
     *
     * @param WC_Product $product Product instance.
     * @param string     $variations_attr Variations JSON.
     * @return string Form opening HTML
     */
    private function get_form_opening($product, $variations_attr): string
{
}
    /**
     * Get variations table HTML.
     *
     * @param WC_Product $product Product instance.
     * @param array      $variation_attributes Variation attributes.
     * @return string Table HTML
     */
    private function get_variations_table($product, $variation_attributes): string
{
}
    /**
     * Get variation row HTML.
     *
     * @param WC_Product $product Product instance.
     * @param string     $attribute_name Attribute name.
     * @param array      $options Attribute options.
     * @return string Row HTML
     */
    private function get_variation_row($product, $attribute_name, $options): string
{
}
    /**
     * Get reset button row HTML.
     *
     * @return string Row HTML
     */
    private function get_reset_button_row(): string
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