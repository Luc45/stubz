<?php

namespace ;

/**
 * Generates requests to send to PayPal.
 */
class WC_Gateway_Paypal_Request extends \
{
    /**
     * Stores line items to send to PayPal.
     *
     * @var array
     */
    protected $line_items = array(
);

    /**
     * Pointer to gateway making the request.
     *
     * @var WC_Gateway_Paypal
     */
    protected $gateway = null;

    /**
     * Endpoint for requests from PayPal.
     *
     * @var string
     */
    protected $notify_url = null;

    /**
     * Endpoint for requests to PayPal.
     *
     * @var string
     */
    protected $endpoint = null;

    /**
     * Constructor.
     *
     * @param WC_Gateway_Paypal $gateway Paypal gateway object.
     */
    public function __construct($gateway)
    {
        // stub
    }

    /**
     * Get the PayPal request URL for an order.
     *
     * @param  WC_Order $order Order object.
     * @param  bool     $sandbox Whether to use sandbox mode or not.
     * @return string
     */
    public function get_request_url($order, $sandbox = false)
    {
        // stub
    }

    /**
     * Limit length of an arg.
     *
     * @param  string  $string Argument to limit.
     * @param  integer $limit Limit size in characters.
     * @return string
     */
    protected function limit_length($string, $limit = 127)
    {
        // stub
    }

    /**
     * Get transaction args for paypal request, except for line item args.
     *
     * @param WC_Order $order Order object.
     * @return array
     */
    protected function get_transaction_args($order)
    {
        // stub
    }

    /**
     * If the default request with line items is too long, generate a new one with only one line item.
     *
     * If URL is longer than 2,083 chars, ignore line items and send cart to Paypal as a single item.
     * One item's name can only be 127 characters long, so the URL should not be longer than limit.
     * URL character limit via:
     * https://support.microsoft.com/en-us/help/208427/maximum-url-length-is-2-083-characters-in-internet-explorer.
     *
     * @param WC_Order $order Order to be sent to Paypal.
     * @param array    $paypal_args Arguments sent to Paypal in the request.
     * @return array
     */
    protected function fix_request_length($order, $paypal_args)
    {
        // stub
    }

    /**
     * Get PayPal Args for passing to PP.
     *
     * @param  WC_Order $order Order object.
     * @return array
     */
    protected function get_paypal_args($order)
    {
        // stub
    }

    /**
     * Get phone number args for paypal request.
     *
     * @param  WC_Order $order Order object.
     * @return array
     */
    protected function get_phone_number_args($order)
    {
        // stub
    }

    /**
     * Get shipping args for paypal request.
     *
     * @param  WC_Order $order Order object.
     * @return array
     */
    protected function get_shipping_args($order)
    {
        // stub
    }

    /**
     * Get shipping cost line item args for paypal request.
     *
     * @param  WC_Order $order Order object.
     * @param  bool     $force_one_line_item Whether one line item was forced by validation or URL length.
     * @return array
     */
    protected function get_shipping_cost_line_item($order, $force_one_line_item)
    {
        // stub
    }

    /**
     * Get line item args for paypal request as a single line item.
     *
     * @param  WC_Order $order Order object.
     * @return array
     */
    protected function get_line_item_args_single_item($order)
    {
        // stub
    }

    /**
     * Get line item args for paypal request.
     *
     * @param  WC_Order $order Order object.
     * @param  bool     $force_one_line_item Create only one item for this order.
     * @return array
     */
    protected function get_line_item_args($order, $force_one_line_item = false)
    {
        // stub
    }

    /**
     * Get order item names as a string.
     *
     * @param  WC_Order $order Order object.
     * @return string
     */
    protected function get_order_item_names($order)
    {
        // stub
    }

    /**
     * Get order item names as a string.
     *
     * @param  WC_Order      $order Order object.
     * @param  WC_Order_Item $item Order item object.
     * @return string
     */
    protected function get_order_item_name($order, $item)
    {
        // stub
    }

    /**
     * Return all line items.
     */
    protected function get_line_items()
    {
        // stub
    }

    /**
     * Remove all line items.
     */
    protected function delete_line_items()
    {
        // stub
    }

    /**
     * Check if the order has valid line items to use for PayPal request.
     *
     * The line items are invalid in case of mismatch in totals or if any amount < 0.
     *
     * @param WC_Order $order Order to be examined.
     * @return bool
     */
    protected function line_items_valid($order)
    {
        // stub
    }

    /**
     * Get line items to send to paypal.
     *
     * @param  WC_Order $order Order object.
     */
    protected function prepare_line_items($order)
    {
        // stub
    }

    /**
     * Add PayPal Line Item.
     *
     * @param  string $item_name Item name.
     * @param  int    $quantity Item quantity.
     * @param  float  $amount Amount.
     * @param  string $item_number Item number.
     */
    protected function add_line_item($item_name, $quantity = 1, $amount = 0.0, $item_number = '')
    {
        // stub
    }

    /**
     * Get the state to send to paypal.
     *
     * @param  string $cc Country two letter code.
     * @param  string $state State code.
     * @return string
     */
    protected function get_paypal_state($cc, $state)
    {
        // stub
    }

    /**
     * Check if currency has decimals.
     *
     * @param  string $currency Currency to check.
     * @return bool
     */
    protected function currency_has_decimals($currency)
    {
        // stub
    }

    /**
     * Round prices.
     *
     * @param  double   $price Price to round.
     * @param  WC_Order $order Order object.
     * @return double
     */
    protected function round($price, $order)
    {
        // stub
    }

    /**
     * Format prices.
     *
     * @param  float|int $price Price to format.
     * @param  WC_Order  $order Order object.
     * @return string
     */
    protected function number_format($price, $order)
    {
        // stub
    }

}

