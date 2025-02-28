<?php
/**
 * Legacy Abstract Order
 *
 * Legacy and deprecated functions are here to keep the WC_Abstract_Order clean.
 * This class will be removed in future versions.
 *
 * @version	 3.0.0
 * @package	 WooCommerce\Abstracts
 * @category	Abstract Class
 * @author	  WooThemes
 */
abstract class WC_Abstract_Legacy_Order extends \WC_Data
{
    /**
     * Add coupon code to the order.
     * @param string|array $code
     * @param int $discount tax amount.
     * @param int $discount_tax amount.
     * @return int order item ID
     * @throws WC_Data_Exception
     */
    public function add_coupon($code = array(), $discount = 0, $discount_tax = 0)
{
}
    /**
     * Add a tax row to the order.
     * @param int $tax_rate_id
     * @param int $tax_amount amount of tax.
     * @param int $shipping_tax_amount shipping amount.
     * @return int order item ID
     * @throws WC_Data_Exception
     */
    public function add_tax($tax_rate_id, $tax_amount = 0, $shipping_tax_amount = 0)
{
}
    /**
     * Add a shipping row to the order.
     * @param WC_Shipping_Rate shipping_rate
     * @return int order item ID
     * @throws WC_Data_Exception
     */
    public function add_shipping($shipping_rate)
{
}
    /**
     * Add a fee to the order.
     * Order must be saved prior to adding items.
     *
     * Fee is an amount of money charged for a particular piece of work
     * or for a particular right or service, and not supposed to be negative.
     *
     * @throws WC_Data_Exception
     * @param  object $fee Fee data.
     * @return int         Updated order item ID.
     */
    public function add_fee($fee)
{
}
    /**
     * Update a line item for the order.
     *
     * Note this does not update order totals.
     *
     * @param object|int $item order item ID or item object.
     * @param WC_Product $product
     * @param array $args data to update.
     * @return int updated order item ID
     * @throws WC_Data_Exception
     */
    public function update_product($item, $product, $args)
{
}
    /**
     * Update coupon for order. Note this does not update order totals.
     * @param object|int $item
     * @param array $args
     * @return int updated order item ID
     * @throws WC_Data_Exception
     */
    public function update_coupon($item, $args)
{
}
    /**
     * Update shipping method for order.
     *
     * Note this does not update the order total.
     *
     * @param object|int $item
     * @param array $args
     * @return int updated order item ID
     * @throws WC_Data_Exception
     */
    public function update_shipping($item, $args)
{
}
    /**
     * Update fee for order.
     *
     * Note this does not update order totals.
     *
     * @param object|int $item
     * @param array $args
     * @return int updated order item ID
     * @throws WC_Data_Exception
     */
    public function update_fee($item, $args)
{
}
    /**
     * Update tax line on order.
     * Note this does not update order totals.
     *
     * @since 3.0
     * @param object|int $item
     * @param array $args
     * @return int updated order item ID
     * @throws WC_Data_Exception
     */
    public function update_tax($item, $args)
{
}
    /**
     * Get a product (either product or variation).
     * @deprecated 4.4.0
     * @param object $item
     * @return WC_Product|bool
     */
    public function get_product_from_item($item)
{
}
    /**
     * Set the customer address.
     * @param array $address Address data.
     * @param string $type Type of address; 'billing' or 'shipping'.
     */
    public function set_address($address, $type = 'billing')
{
}
    /**
     * Set an order total.
     * @param float $amount
     * @param string $total_type
     * @return bool
     */
    public function legacy_set_total($amount, $total_type = 'total')
{
}
    /**
     * Magic __isset method for backwards compatibility. Handles legacy properties which could be accessed directly in the past.
     *
     * @param string $key
     * @return bool
     */
    public function __isset($key)
{
}
    /**
     * Magic __get method for backwards compatibility.
     *
     * @param string $key
     * @return mixed
     */
    public function __get($key)
{
}
    /**
     * has_meta function for order items. This is different to the WC_Data
     * version and should be removed in future versions.
     *
     * @deprecated 3.0
     *
     * @param int $order_item_id
     *
     * @return array of meta data.
     */
    public function has_meta($order_item_id)
{
}
    /**
     * Display meta data belonging to an item.
     * @param  array $item
     */
    public function display_item_meta($item)
{
}
    /**
     * Display download links for an order item.
     * @param  array $item
     */
    public function display_item_downloads($item)
{
}
    /**
     * Get the Download URL.
     *
     * @param  int $product_id
     * @param  int $download_id
     * @return string
     */
    public function get_download_url($product_id, $download_id)
{
}
    /**
     * Get the downloadable files for an item in this order.
     *
     * @param  array $item
     * @return array
     */
    public function get_item_downloads($item)
{
}
    /**
     * Gets shipping total. Alias of WC_Order::get_shipping_total().
     * @deprecated 3.0.0 since this is an alias only.
     * @return float
     */
    public function get_total_shipping()
{
}
    /**
     * Get order item meta.
     * @deprecated 3.0.0
     * @param mixed $order_item_id
     * @param string $key (default: '')
     * @param bool $single (default: false)
     * @return array|string
     */
    public function get_item_meta($order_item_id, $key = '', $single = false)
{
}
    /**
     * Get all item meta data in array format in the order it was saved. Does not group meta by key like get_item_meta().
     *
     * @param mixed $order_item_id
     * @return array of objects
     */
    public function get_item_meta_array($order_item_id)
{
}
    /**
     * Get coupon codes only.
     *
     * @deprecated 3.7.0 - Replaced with better named method to reflect the actual data being returned.
     * @return array
     */
    public function get_used_coupons()
{
}
    /**
     * Expand item meta into the $item array.
     * @deprecated 3.0.0 Item meta no longer expanded due to new order item
     *		classes. This function now does nothing to avoid data breakage.
     * @param array $item before expansion.
     * @return array
     */
    public function expand_item_meta($item)
{
}
    /**
     * Load the order object. Called from the constructor.
     * @deprecated 3.0.0 Logic moved to constructor
     * @param int|object|WC_Order $order Order to init.
     */
    protected function init($order)
{
}
    /**
     * Gets an order from the database.
     * @deprecated 3.0
     * @param int $id (default: 0).
     * @return bool
     */
    public function get_order($id = 0)
{
}
    /**
     * Populates an order from the loaded post data.
     * @deprecated 3.0
     * @param mixed $result
     */
    public function populate($result)
{
}
    /**
     * Cancel the order and restore the cart (before payment).
     * @deprecated 3.0.0 Moved to event handler.
     * @param string $note (default: '') Optional note to add.
     */
    public function cancel_order($note = '')
{
}
    /**
     * Record sales.
     * @deprecated 3.0.0
     */
    public function record_product_sales()
{
}
    /**
     * Increase applied coupon counts.
     * @deprecated 3.0.0
     */
    public function increase_coupon_usage_counts()
{
}
    /**
     * Decrease applied coupon counts.
     * @deprecated 3.0.0
     */
    public function decrease_coupon_usage_counts()
{
}
    /**
     * Reduce stock levels for all line items in the order.
     * @deprecated 3.0.0
     */
    public function reduce_order_stock()
{
}
    /**
     * Send the stock notifications.
     * @deprecated 3.0.0 No longer needs to be called directly.
     *
     * @param $product
     * @param $new_stock
     * @param $qty_ordered
     */
    public function send_stock_notifications($product, $new_stock, $qty_ordered)
{
}
    /**
     * Output items for display in html emails.
     * @deprecated 3.0.0 Moved to template functions.
     * @param array $args Items args.
     * @return string
     */
    public function email_order_items_table($args = array())
{
}
    /**
     * Get currency.
     * @deprecated 3.0.0
     */
    public function get_order_currency()
{
}
}
