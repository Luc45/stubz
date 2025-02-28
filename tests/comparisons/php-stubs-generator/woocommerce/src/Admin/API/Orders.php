<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Orders controller.
 *
 * @internal
 * @extends WC_REST_Orders_Controller
 */
class Orders extends \WC_REST_Orders_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Prepare objects query.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
    }
    /**
     * Get product IDs, names, and quantity from order ID.
     *
     * @param array $order_id ID of order.
     * @return array
     */
    protected function get_products_by_order_id($order_id)
    {
    }
    /**
     * Get customer data from customer_id.
     *
     * @param array $customer_id ID of customer.
     * @return array
     */
    protected function get_customer_by_id($customer_id)
    {
    }
    /**
     * Get formatted item data.
     *
     * @param  WC_Data $object WC_Data instance.
     * @return array
     */
    protected function get_formatted_item_data($object)
    {
    }
}
