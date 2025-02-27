<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Orders controller.
 *
 * @internal
 * @extends WC_REST_Orders_Controller
 */
class Orders
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
        // stub
    }

    /**
     * Prepare objects query.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
        // stub
    }

    /**
     * Helper method to allow searching by partial order number.
     *
     * @param int   $number Partial order number match.
     * @param array $args List of arguments for the request.
     *
     * @return array Modified args with partial order search included.
     */
    private function search_partial_order_number($number, $args)
    {
        // stub
    }

    /**
     * Get product IDs, names, and quantity from order ID.
     *
     * @param array $order_id ID of order.
     * @return array
     */
    protected function get_products_by_order_id($order_id)
    {
        // stub
    }

    /**
     * Get customer data from customer_id.
     *
     * @param array $customer_id ID of customer.
     * @return array
     */
    protected function get_customer_by_id($customer_id)
    {
        // stub
    }

    /**
     * Get formatted item data.
     *
     * @param  WC_Data $object WC_Data instance.
     * @return array
     */
    protected function get_formatted_item_data($object)
    {
        // stub
    }

}