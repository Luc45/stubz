<?php

namespace Automattic\WooCommerce\Admin\Overrides;

/**
 * WC_Order_Refund subclass.
 */
class OrderRefund extends \WC_Order_Refund
{
    /**
     * Order traits.
     */
    use \Automattic\WooCommerce\Admin\Overrides\OrderTraits;
    /**
     * Caches the customer ID.
     *
     * @var int
     */
    public $customer_id = null;
    /**
     * Add filter(s) required to hook this class to substitute WC_Order_Refund.
     */
    public static function add_filters()
    {
    }
    /**
     * Filter function to swap class WC_Order_Refund for this one in cases when it's suitable.
     *
     * @param string $classname Name of the class to be created.
     * @param string $order_type Type of order object to be created.
     * @param number $order_id Order id to create.
     *
     * @return string
     */
    public static function order_class_name($classname, $order_type, $order_id)
    {
    }
    /**
     * Get the customer ID of the parent order used for reports in the customer lookup table.
     *
     * @return int|bool Customer ID of parent order, or false if parent order not found.
     */
    public function get_report_customer_id()
    {
    }
    /**
     * Returns null since refunds should not be counted towards returning customer counts.
     *
     * @return null
     */
    public function is_returning_customer()
    {
    }
}