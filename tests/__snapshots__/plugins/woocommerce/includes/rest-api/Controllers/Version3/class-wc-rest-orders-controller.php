<?php
/**
 * REST API Orders controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Orders_V2_Controller
 */
class WC_REST_Orders_Controller extends \WC_REST_Orders_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Calculate coupons.
     *
     * @throws WC_REST_Exception When fails to set any item.
     * @param WP_REST_Request $request Request object.
     * @param WC_Order        $order   Order data.
     * @return bool
     */
    protected function calculate_coupons($request, $order)
{
}
    /**
     * Prepare a single order for create or update.
     *
     * @throws WC_REST_Exception When fails to set any item.
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data
     */
    protected function prepare_object_for_database($request, $creating = false)
{
}
    /**
     * Create or update a line item, overridden to add COGS data as needed.
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
     * Wrapper method to remove order items.
     * When updating, the item ID provided is checked to ensure it is associated
     * with the order.
     *
     * @param WC_Order $order     The order to remove the item from.
     * @param string   $item_type The item type (from the request, not from the item, e.g. 'line_items' rather than 'line_item').
     * @param int      $item_id   The ID of the item to remove.
     *
     * @return void
     * @throws WC_REST_Exception If item ID is not associated with order.
     */
    protected function remove_item(WC_Order $order, string $item_type, int $item_id): void
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
}
