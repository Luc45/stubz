<?php

/**
 * REST API Orders controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_CRUD_Controller
 */
class WC_REST_Orders_V2_Controller extends \WC_REST_CRUD_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'orders';

    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_order';

    /**
     * If object is hierarchical.
     *
     * @var bool
     */
    protected $hierarchical = true;

    /**
     * Stores the request.
     *
     * @var array
     */
    protected $request = array();

    /**
     * Register the routes for orders.
     */
    public function register_routes()
{
}
    /**
     * Get object. Return false if object is not of required type.
     *
     * @since  3.0.0
     * @param  int $id Object ID.
     * @return WC_Data|bool
     */
    protected function get_object($id)
{
}
    /**
     * Check if a given request has access to read an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access to update an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access to delete an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error
     */
    public function delete_item_permissions_check($request)
{
}
    /**
     * Expands an order item to get its data.
     *
     * @param WC_Order_item $item Order item data.
     * @return array
     */
    protected function get_order_item_data($item)
{
}
    /**
     * Merge the `$formatted_meta_data` `display_key` and `display_value` attribute values into the corresponding
     * {@link WC_Meta_Data}. Returns the merged array.
     *
     * @param WC_Meta_Data $meta_item           An object from {@link WC_Order_Item::get_meta_data()}.
     * @param array        $formatted_meta_data An object result from {@link WC_Order_Item::get_all_formatted_meta_data}.
     * The keys are the IDs of {@link WC_Meta_Data}.
     *
     * @return array
     */
    private function merge_meta_item_with_formatted_meta_display_attributes($meta_item, $formatted_meta_data)
{
}
    /**
     * With HPOS, few internal meta keys such as _billing_address_index, _shipping_address_index are not considered internal anymore (since most internal keys were flattened into dedicated columns).
     *
     * This function helps in filtering out any remaining internal meta keys with HPOS is enabled.
     *
     * @param array $meta_data Order meta data.
     *
     * @return array Filtered order meta data.
     */
    private function filter_internal_meta_keys($meta_data)
{
}
    /**
     * Get formatted item data.
     *
     * @since 3.0.0
     * @param WC_Order $order WC_Data instance.
     *
     * @return array
     */
    protected function get_formatted_item_data($order)
{
}
    /**
     * Prepare a single order output for response.
     *
     * @since  3.0.0
     * @param  WC_Data         $object  Object data.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_object_for_response($object, $request)
{
}
    /**
     * Core method to prepare a single order object for response
     * (doesn't fire hooks, execute rest_ensure_response, or add links).
     *
     * @param  WC_Data         $order  Object data.
     * @param  WP_REST_Request $request Request object.
     * @return array Prepared response data.
     * @since  9.5.0
     */
    protected function prepare_object_for_response_core($order, $request): array
{
}
    /**
     * Prepare links for the request.
     *
     * @param WC_Data         $object  Object data.
     * @param WP_REST_Request $request Request object.
     * @return array                   Links for the given post.
     */
    protected function prepare_links($object, $request)
{
}
    /**
     * Prepare objects query.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    protected function prepare_objects_query($request)
{
}
    /**
     * Only return writable props from schema.
     *
     * @param  array $schema Schema.
     * @return bool
     */
    protected function filter_writable_props($schema)
{
}
    /**
     * Prepare a single order for create or update.
     *
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data
     */
    protected function prepare_object_for_database($request, $creating = false)
{
}
    /**
     * Save an object data.
     *
     * @since  3.0.0
     * @throws WC_REST_Exception But all errors are validated before returning any data.
     * @param  WP_REST_Request $request  Full details about the request.
     * @param  bool            $creating If is creating a new object.
     * @return WC_Data|WP_Error
     */
    protected function save_object($request, $creating = false)
{
}
    /**
     * Update address.
     *
     * @param WC_Order $order  Order data.
     * @param array    $posted Posted data.
     * @param string   $type   Type of address; 'billing' or 'shipping'.
     */
    protected function update_address($order, $posted, $type = 'billing')
{
}
    /**
     * Gets the product ID from the SKU or posted ID.
     *
     * @throws WC_REST_Exception When SKU or ID is not valid.
     * @param array  $posted Request data.
     * @param string $action 'create' to add line item or 'update' to update it.
     * @return int
     */
    protected function get_product_id($posted, $action = 'create')
{
}
    /**
     * Maybe set an item prop if the value was posted.
     *
     * @param WC_Order_Item $item   Order item.
     * @param string        $prop   Order property.
     * @param array         $posted Request data.
     */
    protected function maybe_set_item_prop($item, $prop, $posted)
{
}
    /**
     * Maybe set item props if the values were posted.
     *
     * @param WC_Order_Item $item   Order item data.
     * @param string[]      $props  Properties.
     * @param array         $posted Request data.
     */
    protected function maybe_set_item_props($item, $props, $posted)
{
}
    /**
     * Maybe set item meta if posted.
     *
     * @param WC_Order_Item $item   Order item data.
     * @param array         $posted Request data.
     */
    protected function maybe_set_item_meta_data($item, $posted)
{
}
    /**
     * Create or update a line item.
     *
     * @param array  $posted Line item data.
     * @param string $action 'create' to add line item or 'update' to update it.
     * @param object $item Passed when updating an item. Null during creation.
     * @return WC_Order_Item_Product
     * @throws WC_REST_Exception Invalid data, server error.
     */
    protected function prepare_line_items($posted, $action = 'create', $item = null)
{
}
    /**
     * Create or update an order shipping method.
     *
     * @param array  $posted $shipping Item data.
     * @param string $action 'create' to add shipping or 'update' to update it.
     * @param object $item Passed when updating an item. Null during creation.
     * @return WC_Order_Item_Shipping
     * @throws WC_REST_Exception Invalid data, server error.
     */
    protected function prepare_shipping_lines($posted, $action = 'create', $item = null)
{
}
    /**
     * Create or update an order fee.
     *
     * @param array  $posted Item data.
     * @param string $action 'create' to add fee or 'update' to update it.
     * @param object $item Passed when updating an item. Null during creation.
     * @return WC_Order_Item_Fee
     * @throws WC_REST_Exception Invalid data, server error.
     */
    protected function prepare_fee_lines($posted, $action = 'create', $item = null)
{
}
    /**
     * Create or update an order coupon.
     *
     * @param array  $posted Item data.
     * @param string $action 'create' to add coupon or 'update' to update it.
     * @param object $item Passed when updating an item. Null during creation.
     * @return WC_Order_Item_Coupon
     * @throws WC_REST_Exception Invalid data, server error.
     */
    protected function prepare_coupon_lines($posted, $action = 'create', $item = null)
{
}
    /**
     * Wrapper method to create/update order items.
     * When updating, the item ID provided is checked to ensure it is associated
     * with the order.
     *
     * @param WC_Order $order order object.
     * @param string   $item_type The item type.
     * @param array    $posted item provided in the request body.
     * @throws WC_REST_Exception If item ID is not associated with order.
     */
    protected function set_item($order, $item_type, $posted)
{
}
    /**
     * Helper method to check if the resource ID associated with the provided item is null.
     * Items can be deleted by setting the resource ID to null.
     *
     * @param array $item Item provided in the request body.
     * @return bool True if the item resource ID is null, false otherwise.
     */
    protected function item_is_null($item)
{
}
    /**
     * Get order statuses without prefixes.
     *
     * @return array
     */
    protected function get_order_statuses()
{
}
    /**
     * Get the Order's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
{
}
    /**
     * Get objects.
     *
     * @param  array $query_args Query args.
     * @return array
     */
    protected function get_objects($query_args)
{
}
}
