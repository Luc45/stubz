<?php

namespace ;

/**
 * WC Order Item Product Data Store
 *
 * @version  3.0.0
 */
class WC_Order_Item_Product_Data_Store extends \Abstract_WC_Order_Item_Type_Data_Store
{
    /**
     * Data stored in meta keys.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array(
  0 => '_product_id',
  1 => '_variation_id',
  2 => '_qty',
  3 => '_tax_class',
  4 => '_line_subtotal',
  5 => '_line_subtotal_tax',
  6 => '_line_total',
  7 => '_line_tax',
  8 => '_line_tax_data',
);

    /**
     * Read/populate data properties specific to this order item.
     *
     * @since 3.0.0
     * @param WC_Order_Item_Product $item Product order item object.
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
     * @param WC_Order_Item_Product $item Product order item object.
     */
    public function save_item_data(&$item)
    {
        // stub
    }

    /**
     * Get a list of download IDs for a specific item from an order.
     *
     * @since 3.0.0
     * @param WC_Order_Item_Product $item Product order item object.
     * @param WC_Order              $order Order object.
     * @return array
     */
    public function get_download_ids($item, $order)
    {
        // stub
    }

}

