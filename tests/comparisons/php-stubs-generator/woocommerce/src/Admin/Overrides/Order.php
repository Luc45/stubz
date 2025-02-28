<?php

namespace Automattic\WooCommerce\Admin\Overrides;

/**
 * WC_Order subclass.
 */
class Order extends \WC_Order
{
    /**
     * Order traits.
     */
    use \Automattic\WooCommerce\Admin\Overrides\OrderTraits;
    /**
     * Holds refund amounts and quantities for the order.
     *
     * @var void|array
     */
    protected $refunded_line_items;
    /**
     * Caches the customer ID.
     *
     * @var int
     */
    public $customer_id = null;
    /**
     * Get only core class data in array format.
     *
     * @return array
     */
    public function get_data_without_line_items()
    {
    }
    /**
     * Get order line item data by type.
     *
     * @param string $type Order line item type.
     * @return array|bool Array of line items on success, boolean false on failure.
     */
    public function get_line_item_data($type)
    {
    }
    /**
     * Add filter(s) required to hook this class to substitute WC_Order.
     */
    public static function add_filters()
    {
    }
    /**
     * Filter function to swap class WC_Order for this one in cases when it's suitable.
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
     * Get the customer ID used for reports in the customer lookup table.
     *
     * @return int
     */
    public function get_report_customer_id()
    {
    }
    /**
     * Returns true if the customer has made an earlier order.
     *
     * @return bool
     */
    public function is_returning_customer()
    {
    }
    /**
     * Get the customer's first name.
     */
    public function get_customer_first_name()
    {
    }
    /**
     * Get the customer's last name.
     */
    public function get_customer_last_name()
    {
    }
}