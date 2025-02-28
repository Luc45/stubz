<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CatalogSorting class.
 */
class AddToCartForm extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-form';

    /**
     * Initializes the AddToCartForm block and hooks into the `wc_add_to_cart_message_html` filter
     * to prevent displaying the Cart Notice when the block is inside the Single Product block
     * and the Add to Cart button is clicked.
     *
     * It also hooks into the `woocommerce_add_to_cart_redirect` filter to prevent redirecting
     * to another page when the block is inside the Single Product block and the Add to Cart button
     * is clicked.
     *
     * @return void
     */
    protected function initialize()
{
}
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
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = array())
{
}
    /**
     * Add increment and decrement buttons to the quantity input field.
     *
     * @param string $product_html add-to-cart form HTML.
     * @param string $product_name Product name.
     * @return stringa add-to-cart form HTML with increment and decrement buttons.
     */
    private function add_steppers($product_html, $product_name)
{
}
    /**
     * Add classes to the Add to Cart form input needed for the stepper style.
     *
     * @param string $product_html The Add to Cart form HTML.
     *
     * @return string The Add to Cart form HTML with classes added.
     */
    private function add_stepper_classes_to_add_to_cart_form_input($product_html)
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
    /**
     * Add a hidden input to the Add to Cart form to indicate that it is a descendent of a Single Product block.
     *
     * @param string $product_html The Add to Cart Form HTML.
     * @param string $is_descendent_of_single_product_block Indicates if block is descendent of Single Product block.
     *
     * @return string The Add to Cart Form HTML with the hidden input.
     */
    protected function add_is_descendent_of_single_product_block_hidden_input_to_product_form($product_html, $is_descendent_of_single_product_block)
{
}
    /**
     * Filter the add to cart message to prevent the Notice from being displayed when the Add to Cart form is a descendent of a Single Product block
     * and the Add to Cart button is clicked.
     *
     * @param string $message Message to be displayed when product is added to the cart.
     */
    public function add_to_cart_message_html_filter($message)
{
}
    /**
     * Hooks into the `woocommerce_add_to_cart_redirect` filter to prevent redirecting
     * to another page when the block is inside the Single Product block and the Add to Cart button
     * is clicked.
     *
     * @param string $url The URL to redirect to after the product is added to the cart.
     * @return string The filtered redirect URL.
     */
    public function add_to_cart_redirect_filter($url)
{
}
}