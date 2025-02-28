<?php

/**
 * WC Order Item Product Data Store
 *
 * @version  3.0.0
 */
class WC_Order_Item_Product_Data_Store extends \Abstract_WC_Order_Item_Type_Data_Store implements \WC_Object_Data_Store_Interface, \WC_Order_Item_Product_Data_Store_Interface, \WC_Order_Item_Type_Data_Store_Interface
{
    /**
     * Data stored in meta keys.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array('_product_id', '_variation_id', '_qty', '_tax_class', '_line_subtotal', '_line_subtotal_tax', '_line_total', '_line_tax', '_line_tax_data');
    /**
     * Read/populate data properties specific to this order item.
     *
     * @since 3.0.0
     * @param WC_Order_Item_Product $item Product order item object.
     */
    public function read(&$item)
    {
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
    }
}