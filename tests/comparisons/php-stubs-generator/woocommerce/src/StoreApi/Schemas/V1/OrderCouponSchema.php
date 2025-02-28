<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * OrderCouponSchema class.
 */
class OrderCouponSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'order_coupon';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'order-coupon';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert an order coupon to an object suitable for the response.
     *
     * @param \WC_Order_Item_Coupon $coupon Order coupon object.
     * @return array
     */
    public function get_item_response($coupon)
    {
    }
}