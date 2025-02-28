<?php

/**
 * WC Order Item Data Store
 *
 * @version  3.0.0
 */
abstract class Abstract_WC_Order_Item_Type_Data_Store
{
    /**
     * Meta type. This should match up with
     * the types available at https://developer.wordpress.org/reference/functions/add_metadata/.
     * WP defines 'post', 'user', 'comment', and 'term'.
     *
     * @var string
     */
    protected $meta_type = 'order_item';

    /**
     * This only needs set if you are using a custom metadata type (for example payment tokens.
     * This should be the name of the field your table uses for associating meta with objects.
     * For example, in payment_tokenmeta, this would be payment_token_id.
     *
     * @var string
     */
    protected $object_id_field_for_meta = 'order_item_id';

    /**
     * Indicates if the Cost of Goods Sold feature is enabled.
     *
     * @var bool
     */
    private bool $cogs_is_enabled;

    /**
     * The instance of WC_Order_Item_Data_Store to use for COGS related operations.
     *
     * @var WC_Order_Item_Data_Store
     */
    private WC_Data_Store $order_item_data_store;

    /**
     * Class constructor.
     */
    public function __construct()
{
}
    /**
     * Create a new order item in the database.
     *
     * @param WC_Order_Item $item Order item object.
     * @since 3.0.0
     */
    public function create(&$item)
{
}
    /**
     * Update a order item in the database.
     *
     * @param WC_Order_Item $item Order item object.
     * @since 3.0.0
     */
    public function update(&$item)
{
}
    /**
     * Remove an order item from the database.
     *
     * @param WC_Order_Item $item Order item object.
     * @param array         $args Array of args to pass to the delete method.
     * @since 3.0.0
     */
    public function delete(&$item, $args = array())
{
}
    /**
     * Read a order item from the database.
     *
     * @param WC_Order_Item $item Order item object.
     *
     * @throws Exception If invalid order item.
     * @since 3.0.0
     */
    public function read(&$item)
{
}
    /**
     * Saves an item's data to the database / item meta.
     * Ran after both create and update, so $item->get_id() will be set.
     *
     * @param WC_Order_Item $item Order item object.
     * @since 3.0.0
     */
    public function save_item_data(&$item)
{
}
    /**
     * Clear meta cache.
     *
     * @param WC_Order_Item $item Order item object.
     */
    public function clear_cache(&$item)
{
}
    /**
     * Persist the Cost of Goods Sold related data to the database.
     *
     * @param WC_Order_Item $item The order item for which the data will be persisted.
     */
    private function save_cogs_data(WC_Order_Item $item)
{
}
}
