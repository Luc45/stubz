<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * QuantityLimits class.
 *
 * Returns limits for products and cart items when using the StoreAPI and supporting classes.
 */
final class QuantityLimits
{
    use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;

    /**
     * Get quantity limits (min, max, step/multiple) for a product or cart item.
     *
     * @param array $cart_item A cart item array.
     * @return array
     */
    public function get_cart_item_quantity_limits($cart_item)
    {
    }
    /**
     * Get limits for product add to cart forms.
     *
     * @param \WC_Product $product Product instance.
     * @return array
     */
    public function get_add_to_cart_limits(\WC_Product $product)
    {
    }
    /**
     * Fix a quantity violation by adjusting it to the nearest valid quantity.
     *
     * @param int   $quantity The quantity to fix.
     * @param array $cart_item The cart item.
     * @return int
     */
    public function normalize_cart_item_quantity(int $quantity, array $cart_item)
    {
    }
    /**
     * Return a number using the closest multiple of another number. Used to enforce step/multiple values.
     *
     * @param int    $number Number to round.
     * @param int    $multiple_of The multiple.
     * @param string $rounding_function ceil, floor, or round.
     * @return int
     */
    public function limit_to_multiple(int $number, int $multiple_of, string $rounding_function = 'round')
    {
    }
    /**
     * Check that a given quantity is valid according to any limits in place.
     *
     * @param integer $quantity Quantity to validate.
     * @param array   $cart_item Cart item.
     * @return \WP_Error|true
     */
    public function validate_cart_item_quantity($quantity, $cart_item)
    {
    }
}
