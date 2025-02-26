<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * QuantityLimits class.
 *
 * Returns limits for products and cart items when using the StoreAPI and supporting classes.
 */
final class QuantityLimits extends \
{
    /**
     * Get quantity limits (min, max, step/multiple) for a product or cart item.
     *
     * @param array $cart_item A cart item array.
     * @return array
     */
    public function get_cart_item_quantity_limits($cart_item)
    {
        // stub
    }

    /**
     * Get limits for product add to cart forms.
     *
     * @param \WC_Product $product Product instance.
     * @return array
     */
    public function get_add_to_cart_limits(WC_Product $product)
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Get the limit for the total number of a product allowed in the cart.
     *
     * This is based on product properties, including remaining stock, and defaults to a maximum of 9999 of any product
     * in the cart at once.
     *
     * @param \WC_Product $product Product instance.
     * @return int
     */
    protected function get_product_quantity_limit(WC_Product $product)
    {
        // stub
    }

    /**
     * Returns the remaining stock for a product if it has stock.
     *
     * This also factors in draft orders.
     *
     * @param \WC_Product $product Product instance.
     * @return integer|null
     */
    protected function get_remaining_stock(WC_Product $product)
    {
        // stub
    }

    /**
     * Get a quantity for a product or cart item by running it through a filter hook.
     *
     * @param int               $value Value to filter.
     * @param string            $value_type Type of value. Used for filter suffix.
     * @param \WC_Product|array $cart_item_or_product Either a cart item or a product instance.
     * @return int
     */
    protected function filter_numeric_value(int $value, string $value_type, $cart_item_or_product)
    {
        // stub
    }

    /**
     * Get a quantity for a product or cart item by running it through a filter hook.
     *
     * @param bool              $value Value to filter.
     * @param string            $value_type Type of value. Used for filter suffix.
     * @param \WC_Product|array $cart_item_or_product Either a cart item or a product instance.
     * @return bool
     */
    protected function filter_boolean_value($value, string $value_type, $cart_item_or_product)
    {
        // stub
    }

}

