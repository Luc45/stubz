<?php

namespace Automattic\WooCommerce\Checkout\Helpers;

/**
 * Stock Reservation class.
 */
final class ReserveStock
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Query for any existing holds on stock for this item.
     *
     * @param \WC_Product $product Product to get reserved stock for.
     * @param integer     $exclude_order_id Optional order to exclude from the results.
     *
     * @return integer Amount of stock already reserved.
     */
    public function get_reserved_stock($product, $exclude_order_id = 0)
    {
    }
    /**
     * Put a temporary hold on stock for an order if enough is available.
     *
     * @throws ReserveStockException If stock cannot be reserved.
     *
     * @param \WC_Order $order Order object.
     * @param int       $minutes How long to reserve stock in minutes. Defaults to woocommerce_hold_stock_minutes.
     */
    public function reserve_stock_for_order($order, $minutes = 0)
    {
    }
    /**
     * Release a temporary hold on stock for an order.
     *
     * @param \WC_Order $order Order object.
     */
    public function release_stock_for_order($order)
    {
    }
}