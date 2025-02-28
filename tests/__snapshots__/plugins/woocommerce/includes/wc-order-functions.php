<?php
/**
 * Standard way of retrieving orders based on certain parameters.
 *
 * This function should be used for order retrieval so that when we move to
 * custom tables, functions still work.
 *
 * Args and usage: https://github.com/woocommerce/woocommerce/wiki/wc_get_orders-and-WC_Order_Query
 *
 * @since  2.6.0
 * @param  array $args Array of args (above).
 * @return WC_Order[]|stdClass Number of pages and an array of order objects if
 *                             paginate is true, or just an array of values.
 */
function wc_get_orders($args)
{
}
/**
 * Main function for returning orders, uses the WC_Order_Factory class.
 *
 * @since  2.2
 *
 * @param mixed $the_order       Post object or post ID of the order.
 *
 * @return bool|WC_Order|WC_Order_Refund
 */
function wc_get_order($the_order = false)
{
}
/**
 * Get all order statuses.
 *
 * @since 2.2
 * @used-by WC_Order::set_status
 * @return array
 */
function wc_get_order_statuses()
{
}
/**
 * See if a string is an order status.
 *
 * @param  string $maybe_status Status, including any wc- prefix.
 * @return bool
 */
function wc_is_order_status($maybe_status)
{
}
/**
 * Get list of statuses which are consider 'paid'.
 *
 * @since  3.0.0
 * @return array
 */
function wc_get_is_paid_statuses()
{
}
/**
 * Get list of statuses which are consider 'pending payment'.
 *
 * @since  3.6.0
 * @return array
 */
function wc_get_is_pending_statuses()
{
}
/**
 * Get the nice name for an order status.
 *
 * @since  2.2
 * @param  string $status Status.
 * @return string
 */
function wc_get_order_status_name($status)
{
}
/**
 * Generate an order key with prefix.
 *
 * @since 3.5.4
 * @param string $key Order key without a prefix. By default generates a 13 digit secret.
 * @return string The order key.
 */
function wc_generate_order_key($key = '')
{
}
/**
 * Finds an Order ID based on an order key.
 *
 * @param string $order_key An order key has generated by.
 * @return int The ID of an order, or 0 if the order could not be found.
 */
function wc_get_order_id_by_order_key($order_key)
{
}
/**
 * Get all registered order types.
 *
 * @since  2.2
 * @param  string $for Optionally define what you are getting order types for so
 *                     only relevant types are returned.
 *                     e.g. for 'order-meta-boxes', 'order-count'.
 * @return array
 */
function wc_get_order_types($for = '')
{
}
/**
 * Get an order type by post type name.
 *
 * @param  string $type Post type name.
 * @return bool|array Details about the order type.
 */
function wc_get_order_type($type)
{
}
/**
 * Register order type. Do not use before init.
 *
 * Wrapper for register post type, as well as a method of telling WC which.
 * post types are types of orders, and having them treated as such.
 *
 * $args are passed to register_post_type, but there are a few specific to this function:
 *      - add_order_meta_boxes (bool) Whether or not the order type gets shop_order meta boxes.
 *      - exclude_from_order_count (bool) Whether or not this order type is excluded from counts.
 *      - exclude_from_order_views (bool) Whether or not this order type is visible by customers when.
 *      viewing orders e.g. on the my account page.
 *      - exclude_from_order_reports (bool) Whether or not to exclude this type from core reports.
 *      - exclude_from_order_sales_reports (bool) Whether or not to exclude this type from core sales reports.
 *
 * @since  2.2
 * @see    register_post_type for $args used in that function
 * @param  string $type Post type. (max. 20 characters, can not contain capital letters or spaces).
 * @param  array  $args An array of arguments.
 * @return bool Success or failure
 */
function wc_register_order_type($type, $args = array())
{
}
/**
 * Return the count of processing orders.
 *
 * @return int
 */
function wc_processing_order_count()
{
}
/**
 * Return the orders count of a specific order status.
 *
 * @param string $status Status.
 * @param string $type   (Optional) Order type. Leave empty to include all 'for order-count' order types. @{see wc_get_order_types()}.
 * @return int
 */
function wc_orders_count($status, string $type = '')
{
}
/**
 * Grant downloadable product access to the file identified by $download_id.
 *
 * @param  string         $download_id File identifier.
 * @param  int|WC_Product $product     Product instance or ID.
 * @param  WC_Order       $order       Order data.
 * @param  int            $qty         Quantity purchased.
 * @param  WC_Order_Item  $item        Item of the order.
 * @return int|bool insert id or false on failure.
 */
function wc_downloadable_file_permission($download_id, $product, $order, $qty = 1, $item = null)
{
}
/**
 * Order Status completed - give downloadable product access to customer.
 *
 * @param int  $order_id Order ID.
 * @param bool $force    Force downloadable permissions.
 */
function wc_downloadable_product_permissions($order_id, $force = false)
{
}
/**
 * Clear all transients cache for order data.
 *
 * @param int|WC_Order $order Order instance or ID.
 */
function wc_delete_shop_order_transients($order = 0)
{
}
/**
 * See if we only ship to billing addresses.
 *
 * @return bool
 */
function wc_ship_to_billing_address_only()
{
}
/**
 * Create a new order refund programmatically.
 *
 * Returns a new refund object on success which can then be used to add additional data.
 *
 * @since 2.2
 * @throws Exception Throws exceptions when fail to create, but returns WP_Error instead.
 * @param array $args New refund arguments.
 * @return WC_Order_Refund|WP_Error
 */
function wc_create_refund($args = array())
{
}
/**
 * Try to refund the payment for an order via the gateway.
 *
 * @since 3.0.0
 * @throws Exception Throws exceptions when fail to refund, but returns WP_Error instead.
 * @param WC_Order $order  Order instance.
 * @param string   $amount Amount to refund.
 * @param string   $reason Refund reason.
 * @return bool|WP_Error
 */
function wc_refund_payment($order, $amount, $reason = '')
{
}
/**
 * Restock items during refund.
 *
 * @since 3.0.0
 * @param WC_Order $order               Order instance.
 * @param array    $refunded_line_items Refunded items list.
 */
function wc_restock_refunded_items($order, $refunded_line_items)
{
}
/**
 * Get tax class by tax id.
 *
 * @since 2.2
 * @param int $tax_id Tax ID.
 * @return string
 */
function wc_get_tax_class_by_tax_id($tax_id)
{
}
/**
 * Get payment gateway class by order data.
 *
 * @since 2.2
 * @param int|WC_Order $order Order instance.
 * @return WC_Payment_Gateway|bool
 */
function wc_get_payment_gateway_by_order($order)
{
}
/**
 * When refunding an order, create a refund line item if the partial refunds do not match order total.
 *
 * This is manual; no gateway refund will be performed.
 *
 * @since 2.4
 * @param int $order_id Order ID.
 */
function wc_order_fully_refunded($order_id)
{
}
/**
 * Search orders.
 *
 * @since  2.6.0
 * @param  string $term Term to search.
 * @return array List of orders ID.
 */
function wc_order_search($term)
{
}
/**
 * Update total sales amount for each product within a paid order.
 *
 * @since 3.0.0
 * @param int $order_id Order ID.
 */
function wc_update_total_sales_counts($order_id)
{
}
/**
 * Update used coupon amount for each coupon within an order.
 *
 * @since 3.0.0
 * @param int $order_id Order ID.
 */
function wc_update_coupon_usage_counts($order_id)
{
}
/**
 * Cancel all unpaid orders after held duration to prevent stock lock for those products.
 */
function wc_cancel_unpaid_orders()
{
}
/**
 * Sanitize order id removing unwanted characters.
 *
 * E.g Users can sometimes try to track an order id using # with no success.
 * This function will fix this.
 *
 * @since 3.1.0
 * @param int $order_id Order ID.
 */
function wc_sanitize_order_id($order_id)
{
}
/**
 * Get an order note.
 *
 * @since  3.2.0
 * @param  int|WP_Comment $data Note ID (or WP_Comment instance for internal use only).
 * @return stdClass|null        Object with order note details or null when does not exists.
 */
function wc_get_order_note($data)
{
}
/**
 * Get order notes.
 *
 * @since  3.2.0
 * @param  array $args Query arguments {
 *     Array of query parameters.
 *
 *     @type string $limit         Maximum number of notes to retrieve.
 *                                 Default empty (no limit).
 *     @type int    $order_id      Limit results to those affiliated with a given order ID.
 *                                 Default 0.
 *     @type array  $order__in     Array of order IDs to include affiliated notes for.
 *                                 Default empty.
 *     @type array  $order__not_in Array of order IDs to exclude affiliated notes for.
 *                                 Default empty.
 *     @type string $orderby       Define how should sort notes.
 *                                 Accepts 'date_created', 'date_created_gmt' or 'id'.
 *                                 Default: 'id'.
 *     @type string $order         How to order retrieved notes.
 *                                 Accepts 'ASC' or 'DESC'.
 *                                 Default: 'DESC'.
 *     @type string $type          Define what type of note should retrieve.
 *                                 Accepts 'customer', 'internal' or empty for both.
 *                                 Default empty.
 * }
 * @return stdClass[]              Array of stdClass objects with order notes details.
 */
function wc_get_order_notes($args)
{
}
/**
 * Create an order note.
 *
 * @since  3.2.0
 * @param  int    $order_id         Order ID.
 * @param  string $note             Note to add.
 * @param  bool   $is_customer_note If is a costumer note.
 * @param  bool   $added_by_user    If note is create by an user.
 * @return int|WP_Error             Integer when created or WP_Error when found an error.
 */
function wc_create_order_note($order_id, $note, $is_customer_note = false, $added_by_user = false)
{
}
/**
 * Delete an order note.
 *
 * @since  3.2.0
 * @param  int $note_id Order note.
 * @return bool         True on success, false on failure.
 */
function wc_delete_order_note($note_id)
{
}
