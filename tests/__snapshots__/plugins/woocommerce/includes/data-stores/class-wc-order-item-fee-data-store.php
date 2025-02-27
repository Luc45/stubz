<?php

/**
 * WC Order Item Fee Data Store
 *
 * @version  3.0.0
 */
class WC_Order_Item_Fee_Data_Store
{
    /**
     * Data stored in meta keys.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array (
  0 => '_fee_amount',
  1 => '_tax_class',
  2 => '_tax_status',
  3 => '_line_subtotal',
  4 => '_line_subtotal_tax',
  5 => '_line_total',
  6 => '_line_tax',
  7 => '_line_tax_data',
);

    /**
     * Read/populate data properties specific to this order item.
     *
     * @since 3.0.0
     * @param WC_Order_Item_Fee $item Fee order item object.
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
     * @param WC_Order_Item_Fee $item Fee order item object.
     */
    public function save_item_data(&$item)
    {
        // stub
    }

}
