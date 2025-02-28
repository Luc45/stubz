<?php

/**
 * REST API Network Orders controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Orders_V2_Controller
 */
class WC_REST_Network_Orders_V2_Controller extends \WC_REST_Orders_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
    /**
     * Register the routes for network orders.
     */
    public function register_routes()
    {
    }
    /**
     * Retrieves the item's schema for display / public consumption purposes.
     *
     * @return array Public item schema data.
     */
    public function get_public_item_schema()
    {
    }
    /**
     * Does a permissions check for the proper requested blog
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return bool $permission
     */
    public function network_orders_permissions_check($request)
    {
    }
    /**
     * Get a collection of orders from the requested blog id
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response
     */
    public function network_orders($request)
    {
    }
    /**
     * Filters the post statuses to on hold and processing for the network order query.
     *
     * @param array $args Query args.
     *
     * @return array
     */
    public function network_orders_filter_args($args)
    {
    }
}
