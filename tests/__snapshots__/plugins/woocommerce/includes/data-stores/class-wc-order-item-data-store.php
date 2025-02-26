<?php

namespace ;

/**
 * WC Order Item Data Store: Misc Order Item Data functions.
 *
 * @version  3.0.0
 */
class WC_Order_Item_Data_Store
{
    /**
     * Add an order item to an order.
     *
     * @since  3.0.0
     * @param  int   $order_id Order ID.
     * @param  array $item order_item_name and order_item_type.
     * @return int Order Item ID
     */
    public function add_order_item($order_id, $item)
    {
        // stub
    }

    /**
     * Update an order item.
     *
     * @since  3.0.0
     * @param  int   $item_id Item ID.
     * @param  array $item order_item_name or order_item_type.
     * @return boolean
     */
    public function update_order_item($item_id, $item)
    {
        // stub
    }

    /**
     * Delete an order item.
     *
     * @since  3.0.0
     * @param  int $item_id Item ID.
     */
    public function delete_order_item($item_id)
    {
        // stub
    }

    /**
     * Update term meta.
     *
     * @since  3.0.0
     * @param  int    $item_id Item ID.
     * @param  string $meta_key Meta key.
     * @param  mixed  $meta_value Meta value.
     * @param  string $prev_value (default: '').
     * @return bool
     */
    public function update_metadata($item_id, $meta_key, $meta_value, $prev_value = '')
    {
        // stub
    }

    /**
     * Add term meta.
     *
     * @since  3.0.0
     * @param  int    $item_id Item ID.
     * @param  string $meta_key Meta key.
     * @param  mixed  $meta_value Meta value.
     * @param  bool   $unique (default: false).
     * @return int    New row ID or 0
     */
    public function add_metadata($item_id, $meta_key, $meta_value, $unique = false)
    {
        // stub
    }

    /**
     * Delete term meta.
     *
     * @since  3.0.0
     * @param  int    $item_id Item ID.
     * @param  string $meta_key Meta key.
     * @param  mixed  $meta_value (default: '').
     * @param  bool   $delete_all (default: false).
     * @return bool
     */
    public function delete_metadata($item_id, $meta_key, $meta_value = '', $delete_all = false)
    {
        // stub
    }

    /**
     * Get term meta.
     *
     * @since  3.0.0
     * @param  int    $item_id Item ID.
     * @param  string $key Meta key.
     * @param  bool   $single (default: true).
     * @return mixed
     */
    public function get_metadata($item_id, $key, $single = true)
    {
        // stub
    }

    /**
     * Get order ID by order item ID.
     *
     * @since 3.0.0
     * @param  int $item_id Item ID.
     * @return int
     */
    public function get_order_id_by_order_item_id($item_id)
    {
        // stub
    }

    /**
     * Get the order item type based on Item ID.
     *
     * @since 3.0.0
     * @param int $item_id Item ID.
     * @return string|null Order item type or null if no order item entry found.
     */
    public function get_order_item_type($item_id)
    {
        // stub
    }

    /**
     * Clear meta cache.
     *
     * @param int      $item_id Item ID.
     * @param int|null $order_id Order ID. If not set, it will be loaded using the item ID.
     */
    protected function clear_caches($item_id, $order_id)
    {
        // stub
    }

}

