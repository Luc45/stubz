<?php

namespace ;

/**
 * Abstract Order Data Store: Stored in CPT.
 *
 * @version  3.0.0
 */
abstract class Abstract_WC_Order_Data_Store_CPT
{
    /**
     * Internal meta type used to store order data.
     *
     * @var string
     */
    protected $meta_type = 'post';

    /**
     * Data stored in meta keys, but not considered "meta" for an order.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array (
  0 => '_order_currency',
  1 => '_cart_discount',
  2 => '_cart_discount_tax',
  3 => '_order_shipping',
  4 => '_order_shipping_tax',
  5 => '_order_tax',
  6 => '_order_total',
  7 => '_order_version',
  8 => '_prices_include_tax',
  9 => '_payment_tokens',
);

    /**
     * Custom setters for props. Add key here if it has corresponding set_ and get_ method present.
     *
     * @var string[]
     */
    protected $internal_data_store_key_getters = array (
);

    /**
     * Return internal key getters name.
     *
     * @return string[]
     */
    public function get_internal_data_store_key_getters()
    {
        // stub
    }

    /**
     * Method to create a new order in the database.
     *
     * @param WC_Order $order Order object.
     */
    public function create(&$order)
    {
        // stub
    }

    /**
     * Check if an order exists by id.
     *
     * @since 8.0.0
     *
     * @param int $order_id The order id to check.
     * @return bool True if an order exists with the given name.
     */
    public function order_exists($order_id): bool
    {
        // stub
    }

    /**
     * Method to read an order from the database.
     *
     * @param WC_Order $order Order object.
     *
     * @throws Exception If passed order is invalid.
     */
    public function read(&$order)
    {
        // stub
    }

    /**
     * Set the properties of an object and log the first error found while doing so.
     *
     * @param $order WC_Order $order Order object.
     * @param array          $props The properties to set.
     */
    private function set_order_props(&$order, array $props)
    {
        // stub
    }

    /**
     * Method to update an order in the database.
     *
     * @param WC_Order $order Order object.
     */
    public function update(&$order)
    {
        // stub
    }

    /**
     * Method to delete an order from the database.
     *
     * @param WC_Order $order Order object.
     * @param array    $args Array of args to pass to the delete method.
     *
     * @return void
     */
    public function delete(&$order, $args = array (
))
    {
        // stub
    }

    /**
     * Get the status to save to the post object.
     *
     * Plugins extending the order classes can override this to change the stored status/add prefixes etc.
     *
     * @since 3.6.0
     * @param  WC_order $order Order object.
     * @return string
     */
    protected function get_post_status($order)
    {
        // stub
    }

    /**
     * Excerpt for post.
     *
     * @param  WC_order $order Order object.
     * @return string
     */
    protected function get_post_excerpt($order)
    {
        // stub
    }

    /**
     * Get a title for the new post type.
     *
     * @return string
     */
    protected function get_post_title()
    {
        // stub
    }

    /**
     * Get order key.
     *
     * @since 4.3.0
     * @param WC_order $order Order object.
     * @return string
     */
    protected function get_order_key($order)
    {
        // stub
    }

    /**
     * Read order data. Can be overridden by child classes to load other props.
     *
     * @param WC_Order $order Order object.
     * @param object   $post_object Post object.
     * @since 3.0.0
     */
    protected function read_order_data(&$order, $post_object)
    {
        // stub
    }

    /**
     * Helper method that updates all the post meta for an order based on it's settings in the WC_Order class.
     *
     * @param WC_Order $order Order object.
     * @since 3.0.0
     */
    protected function update_post_meta(&$order)
    {
        // stub
    }

    /**
     * Clear any caches.
     *
     * @param WC_Order $order Order object.
     * @since 3.0.0
     */
    protected function clear_caches(&$order)
    {
        // stub
    }

    /**
     * Read order items of a specific type from the database for this order.
     *
     * @param  WC_Order $order Order object.
     * @param  string   $type Order item type.
     * @return array
     */
    public function read_items($order, $type)
    {
        // stub
    }

    /**
     * Return the order type of a given item which belongs to WC_Order.
     *
     * @since  3.2.0
     * @param  WC_Order $order Order Object.
     * @param  int      $order_item_id Order item id.
     * @return string Order Item type
     */
    public function get_order_item_type($order, $order_item_id)
    {
        // stub
    }

    /**
     * Prime following caches:
     *  1. item-$order_item_id   For individual items.
     *  2. order-items-$order-id For fetching items associated with an order.
     *  3. order-item meta.
     *
     * @param array $order_ids  Order Ids to prime cache for.
     * @param array $query_vars Query vars for the query.
     */
    protected function prime_order_item_caches_for_orders($order_ids, $query_vars)
    {
        // stub
    }

    /**
     * Remove all line items (products, coupons, shipping, taxes) from the order.
     *
     * @param WC_Order $order Order object.
     * @param string   $type Order item type. Default null.
     */
    public function delete_items($order, $type = null)
    {
        // stub
    }

    /**
     * Get token ids for an order.
     *
     * @param WC_Order $order Order object.
     * @return array
     */
    public function get_payment_token_ids($order)
    {
        // stub
    }

    /**
     * Update token ids for an order.
     *
     * @param WC_Order $order Order object.
     * @param array    $token_ids Payment token ids.
     */
    public function update_payment_token_ids($order, $token_ids)
    {
        // stub
    }

    /**
     * Get the order's title.
     *
     * @param WC_Order $order Order object.
     *
     * @return string Order title.
     */
    public function get_title(WC_Order $order)
    {
        // stub
    }

    /**
     * Given an initialized order object, update the post/postmeta records.
     *
     * @param WC_Abstract_Order $order Order object.
     *
     * @return bool Whether the order was updated.
     */
    public function update_order_from_object($order)
    {
        // stub
    }

    /**
     * Change the modified date of the post to match the order's modified date if passed.
     *
     * @hooked wp_insert_post_data See function update_order_from_object.
     *
     * @param array $data An array of slashed, sanitized, and processed post data.
     * @param array $postarr An array of sanitized (and slashed) but otherwise unmodified post data.
     *
     * @return array Data with updated modified date.
     */
    public function update_post_modified_data($data, $postarr)
    {
        // stub
    }

    /**
     * Helper method to update order metadata from initialized order object.
     *
     * @param WC_Abstract_Order $order Order object.
     */
    protected function update_order_meta_from_object($order)
    {
        // stub
    }

}

