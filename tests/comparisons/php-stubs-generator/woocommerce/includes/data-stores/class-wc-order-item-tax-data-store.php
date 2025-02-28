<?php

/**
 * WC Order Item Tax Data Store
 *
 * @version  3.0.0
 */
class WC_Order_Item_Tax_Data_Store extends \Abstract_WC_Order_Item_Type_Data_Store implements \WC_Object_Data_Store_Interface, \WC_Order_Item_Type_Data_Store_Interface
{
    /**
     * Data stored in meta keys.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array('rate_id', 'label', 'compound', 'tax_amount', 'shipping_tax_amount', 'rate_percent');
    /**
     * Read/populate data properties specific to this order item.
     *
     * @since 3.0.0
     * @param WC_Order_Item_Tax $item Tax order item object.
     * @throws Exception If invalid order item.
     */
    public function read(&$item)
    {
    }
    /**
     * Saves an item's data to the database / item meta.
     * Ran after both create and update, so $id will be set.
     *
     * @since 3.0.0
     * @param WC_Order_Item_Tax $item Tax order item object.
     */
    public function save_item_data(&$item)
    {
    }
}