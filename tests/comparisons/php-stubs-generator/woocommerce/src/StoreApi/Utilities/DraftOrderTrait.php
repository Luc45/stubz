<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * DraftOrderTrait
 *
 * Shared functionality for getting and setting draft order IDs from session.
 */
trait DraftOrderTrait
{
    /**
     * Gets draft order data from the customer session.
     *
     * @return integer
     */
    protected function get_draft_order_id()
    {
    }
    /**
     * Updates draft order data in the customer session.
     *
     * @param integer $order_id Draft order ID.
     */
    protected function set_draft_order_id($order_id)
    {
    }
    /**
     * Uses the draft order ID to return an order object, if valid.
     *
     * @return \WC_Order|null;
     */
    protected function get_draft_order()
    {
    }
    /**
     * Whether the passed argument is a draft order or an order that is
     * pending/failed and the cart hasn't changed.
     *
     * @param \WC_Order $order_object Order object to check.
     * @return boolean Whether the order is valid as a draft order.
     */
    protected function is_valid_draft_order($order_object)
    {
    }
}