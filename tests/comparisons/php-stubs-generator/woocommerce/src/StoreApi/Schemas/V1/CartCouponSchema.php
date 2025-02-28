<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * CartCouponSchema class.
 */
class CartCouponSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart_coupon';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'cart-coupon';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Check given coupon exists.
     *
     * @param string $coupon_code Coupon code.
     * @return bool
     */
    public function coupon_exists($coupon_code)
    {
    }
    /**
     * Generate a response from passed coupon code.
     *
     * @param string $coupon_code Coupon code from the cart.
     * @return array
     */
    public function get_item_response($coupon_code)
    {
    }
}