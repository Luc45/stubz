<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Trait to contain shared methods for reports Controllers that use order and orders statuses.
 *
 * If your analytics controller needs to work with orders,
 * you will most probably need to use at least {@see get_order_statuses() get_order_statuses()}
 * to filter only "actionable" statuses to produce consistent results among other analytics.
 *
 * @see GenericController
 */
trait OrderAwareControllerTrait
{
    /**
     * Get the order number for an order. If no filter is present for `woocommerce_order_number`, we can just return the ID.
     * Returns the parent order number if the order is actually a refund.
     *
     * @param  int $order_id Order ID.
     * @return string|null The Order Number or null if the order doesn't exist.
     */
    protected function get_order_number($order_id)
    {
    }
    /**
     * Whether the order is valid.
     *
     * @param bool|WC_Order|WC_Order_Refund $order Order object.
     * @return bool True if the order is valid, false otherwise.
     */
    protected function is_valid_order($order)
    {
    }
    /**
     * Get the order total with the related currency formatting.
     * Returns the parent order total if the order is actually a refund.
     *
     * @param  int $order_id Order ID.
     * @return string|null The Order Number or null if the order doesn't exist.
     */
    protected function get_total_formatted($order_id)
    {
    }
    /**
     * Get order statuses without prefixes.
     * Includes unregistered statuses that have been marked "actionable".
     *
     * @return array
     */
    public static function get_order_statuses()
    {
    }
    /**
     * Get order statuses (and labels) without prefixes.
     *
     * @internal
     * @return array
     */
    public static function get_order_status_labels()
    {
    }
}