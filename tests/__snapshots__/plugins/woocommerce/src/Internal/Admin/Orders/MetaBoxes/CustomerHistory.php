<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders\MetaBoxes;

/**
 * Class CustomerHistory
 *
 * @since 8.5.0
 */
class CustomerHistory
{
    /**
     * Output the customer history template for the order.
     *
     * @param WC_Order $order The order object.
     *
     * @return void
     */
    public function output(WC_Order $order): void
    {
        // stub
    }

    /**
     * Get the order history for the customer (data matches Customers report).
     *
     * @param int $customer_report_id The reports customer ID (not necessarily User ID).
     *
     * @return array|null Order count, total spend, and average spend per order.
     */
    private function get_customer_history($customer_report_id): array|null
    {
        // stub
    }

}