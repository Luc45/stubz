<?php

/**
 * WC_Helper_Orders_API
 *
 * Pings WooCommerce.com to create an order and pull in the necessary data to start the installation process.
 */
class WC_Helper_Orders_API
{
    /**
     * Loads the class, runs on init
     *
     * @return void
     */
    public static function load()
{
}
    /**
     * Registers the REST routes for the Marketplace Orders API.
     * These endpoints are used by the Marketplace Subscriptions React UI.
     */
    public static function register_rest_routes()
{
}
    /**
     * The Extensions page can only be accessed by users with the manage_woocommerce
     * capability. So the API mimics that behavior.
     *
     * @return bool
     */
    public static function get_permission()
{
}
    /**
     * Core function to create an order on WooCommerce.com. Pings the API and catches the exceptions if any.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return WP_REST_Response
     */
    public static function create_order($request)
{
}
}
