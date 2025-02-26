<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * Class OrdersTableRefundDataStore.
 */
class OrdersTableRefundDataStore
{
    /**
     * Data stored in meta keys, but not considered "meta" for refund.
     *
     * @var string[]
     */
    protected $internal_meta_keys = array (
  0 => '_refund_amount',
  1 => '_refund_reason',
  2 => '_refunded_by',
  3 => '_refunded_payment',
);

    /**
     * We do not have and use all the getters and setters from OrderTableDataStore, so we only select the props we actually need.
     *
     * @var \string[][]
     */
    protected $operational_data_column_mapping = array (
  'id' => 
  array (
    'type' => 'int',
  ),
  'order_id' => 
  array (
    'type' => 'int',
  ),
  'woocommerce_version' => 
  array (
    'type' => 'string',
    'name' => 'version',
  ),
  'prices_include_tax' => 
  array (
    'type' => 'bool',
    'name' => 'prices_include_tax',
  ),
  'coupon_usages_are_counted' => 
  array (
    'type' => 'bool',
    'name' => 'recorded_coupon_usage_counts',
  ),
  'shipping_tax_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'shipping_tax',
  ),
  'shipping_total_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'shipping_total',
  ),
  'discount_tax_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'discount_tax',
  ),
  'discount_total_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'discount_total',
  ),
);

    /**
     * Delete a refund order from database.
     *
     * @param \WC_Order $refund Refund object to delete.
     * @param array     $args Array of args to pass to the delete method.
     *
     * @return void
     */
    public function delete(&$refund, $args = array (
))
    {
        // stub
    }

    /**
     * Helper method to set refund props.
     *
     * @param \WC_Order_Refund $refund Refund object.
     * @param object           $data   DB data object.
     *
     * @since 8.0.0
     */
    protected function set_order_props_from_data(&$refund, $data)
    {
        // stub
    }

    /**
     * Method to create a refund in the database.
     *
     * @param \WC_Abstract_Order $refund Refund object.
     */
    public function create(&$refund)
    {
        // stub
    }

    /**
     * Update refund in database.
     *
     * @param \WC_Order $refund Refund object.
     */
    public function update(&$refund)
    {
        // stub
    }

    /**
     * Helper method that updates post meta based on an refund object.
     * Mostly used for backwards compatibility purposes in this datastore.
     *
     * @param \WC_Order $refund Refund object.
     */
    public function update_order_meta(&$refund)
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
     * Returns data store object to use backfilling.
     *
     * @return \WC_Order_Refund_Data_Store_CPT
     */
    protected function get_post_data_store_for_backfill()
    {
        // stub
    }

}

