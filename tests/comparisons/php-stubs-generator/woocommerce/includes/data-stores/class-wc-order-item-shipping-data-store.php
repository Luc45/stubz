<?php

/**
 * WC_Order_Item_Shipping_Data_Store class.
 */
class WC_Order_Item_Shipping_Data_Store extends \Abstract_WC_Order_Item_Type_Data_Store implements \WC_Object_Data_Store_Interface, \WC_Order_Item_Type_Data_Store_Interface
{
    /**
     * Data stored in meta keys.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array('method_id', 'instance_id', 'cost', 'total_tax', 'taxes');
    /**
     * Read/populate data properties specific to this order item.
     *
     * @since 3.0.0
     * @param WC_Order_Item_Shipping $item Item to read to.
     * @throws Exception If invalid shipping order item.
     */
    public function read(&$item)
    {
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
    }
}
