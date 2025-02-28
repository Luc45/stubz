<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * CartItemSchema class.
 */
class CartItemSchema
{
    const IDENTIFIER = 'cart-item';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart_item';

    /**
     * Convert a WooCommerce cart item to an object suitable for the response.
     *
     * @param array $cart_item Cart item array.
     * @return array
     */
    public function get_item_response($cart_item)
{
}
    /**
     * Get list of product images for the cart item.
     *
     * @param \WC_Product $product       Product instance.
     * @param array       $cart_item     Cart item array.
     * @param string      $cart_item_key Cart item key.
     * @return array
     */
    protected function get_cart_images(WC_Product $product, array $cart_item, string $cart_item_key)
{
}
    /**
     * Format cart item data removing any HTML tag.
     *
     * @param array $cart_item Cart item array.
     * @return array
     */
    protected function get_item_data($cart_item)
{
}
    /**
     * Remove HTML tags from cart item data and set the `hidden` property to `__experimental_woocommerce_blocks_hidden`.
     *
     * @param array $item_data_element Individual element of a cart item data.
     * @return array
     */
    protected function format_item_data_element($item_data_element)
{
}
}