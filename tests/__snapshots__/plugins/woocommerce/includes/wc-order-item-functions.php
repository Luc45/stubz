<?php

/**
 * Add a item to an order (for example a line item).
 *
 * @param int   $order_id   Order ID.
 * @param array $item_array Items list.
 *
 * @throws Exception        When `WC_Data_Store::load` validation fails.
 * @return int|bool         Item ID or false
 */
function wc_add_order_item($order_id, $item_array)
{
}
/**
 * Update an item for an order.
 *
 * @since 2.2
 * @param int   $item_id Item ID.
 * @param array $args    Either `order_item_type` or `order_item_name`.
 *
 * @throws Exception     When `WC_Data_Store::load` validation fails.
 * @return bool          True if successfully updated, false otherwise.
 */
function wc_update_order_item($item_id, $args)
{
}
/**
 * Delete an item from the order it belongs to based on item id.
 *
 * @param int $item_id  Item ID.
 *
 * @throws Exception    When `WC_Data_Store::load` validation fails.
 * @return bool
 */
function wc_delete_order_item($item_id)
{
}
/**
 * WooCommerce Order Item Meta API - Update term meta.
 *
 * @param int    $item_id    Item ID.
 * @param string $meta_key   Meta key.
 * @param mixed  $meta_value Meta value.
 * @param string $prev_value Previous value (default: '').
 *
 * @throws Exception         When `WC_Data_Store::load` validation fails.
 * @return bool
 */
function wc_update_order_item_meta($item_id, $meta_key, $meta_value, $prev_value = '')
{
}
/**
 * WooCommerce Order Item Meta API - Add term meta.
 *
 * @param int    $item_id    Item ID.
 * @param string $meta_key   Meta key.
 * @param mixed  $meta_value Meta value.
 * @param bool   $unique     If meta data should be unique (default: false).
 *
 * @throws Exception         When `WC_Data_Store::load` validation fails.
 * @return int               New row ID or 0.
 */
function wc_add_order_item_meta($item_id, $meta_key, $meta_value, $unique = false)
{
}
/**
 * WooCommerce Order Item Meta API - Delete term meta.
 *
 * @param int    $item_id    Item ID.
 * @param string $meta_key   Meta key.
 * @param mixed  $meta_value Meta value (default: '').
 * @param bool   $delete_all Delete all meta data, defaults to `false`.
 *
 * @throws Exception         When `WC_Data_Store::load` validation fails.
 * @return bool
 */
function wc_delete_order_item_meta($item_id, $meta_key, $meta_value = '', $delete_all = false)
{
}
/**
 * WooCommerce Order Item Meta API - Get term meta.
 *
 * @param int    $item_id Item ID.
 * @param string $key     Meta key.
 * @param bool   $single  Whether to return a single value. (default: true).
 *
 * @throws Exception      When `WC_Data_Store::load` validation fails.
 * @return mixed
 */
function wc_get_order_item_meta($item_id, $key, $single = true)
{
}
/**
 * Get order ID by order item ID.
 *
 * @param  int $item_id Item ID.
 *
 * @throws Exception    When `WC_Data_Store::load` validation fails.
 * @return int
 */
function wc_get_order_id_by_order_item_id($item_id)
{
}
