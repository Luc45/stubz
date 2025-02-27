<?php

/**
 * WC_Order_Item_Shipping_Data_Store class.
 */
class WC_Order_Item_Shipping_Data_Store
{
    /**
     * Data stored in meta keys.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array (
  0 => 'method_id',
  1 => 'instance_id',
  2 => 'cost',
  3 => 'total_tax',
  4 => 'taxes',
);

    /**
     * Read/populate data properties specific to this order item.
     *
     * @since 3.0.0
     * @param WC_Order_Item_Shipping $item Item to read to.
     * @throws Exception If invalid shipping order item.
     */
    public function read(&$item)
    {
        // stub
    }

    /**
     * Saves an item's data to the database / item meta.
     * Ran after both create and update, so $id will be set.
     *
     * @since 3.0.0
     * @param WC_Order_Item_Shipping $item Item to save.
     */
    public function save_item_data(&$item)
    {
        // stub
    }

}
