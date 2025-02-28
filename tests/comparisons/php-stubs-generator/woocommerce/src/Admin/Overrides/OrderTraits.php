<?php

namespace Automattic\WooCommerce\Admin\Overrides;

/**
 * OrderTraits class.
 */
trait OrderTraits
{
    /**
     * Calculate shipping amount for line item/product as a total shipping amount ratio based on quantity.
     *
     * @param WC_Order_Item $item Line item from order.
     *
     * @return float|int
     */
    public function get_item_shipping_amount($item)
    {
    }
    /**
     * Calculate shipping tax amount for line item/product as a total shipping tax amount ratio based on quantity.
     *
     * Loosely based on code in includes/admin/meta-boxes/views/html-order-item(s).php.
     *
     * @todo If WC is currently not tax enabled, but it was before (or vice versa), would this work correctly?
     *
     * @param WC_Order_Item $item Line item from order.
     *
     * @return float|int
     */
    public function get_item_shipping_tax_amount($item)
    {
    }
    /**
     * Calculates coupon amount for specified line item/product.
     *
     * Coupon calculation based on woocommerce code in includes/admin/meta-boxes/views/html-order-item.php.
     *
     * @param WC_Order_Item $item Line item from order.
     *
     * @return float
     */
    public function get_item_coupon_amount($item)
    {
    }
}