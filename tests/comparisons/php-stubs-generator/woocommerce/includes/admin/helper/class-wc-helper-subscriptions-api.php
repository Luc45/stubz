<?php

/**
 * WC_Helper_Subscriptions_API
 *
 * The main entry-point for all things related to the Marketplace Subscriptions API.
 * The Subscriptions API manages WooCommerce.com Subscriptions.
 */
class WC_Helper_Subscriptions_API
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
     * Registers the REST routes for the Marketplace Subscriptions API.
     * These endpoints are used by the Marketplace Subscriptions React UI.
     */
    public static function register_rest_routes()
    {
    }
    /**
     * The Extensions page can only be accessed by users with the manage_woocommerce
     * capability. So the API mimics that behavior.
     */
    public static function get_permission()
    {
    }
    /**
     * Fetch subscriptions from WooCommerce.com and serve them
     * as JSON.
     */
    public static function get_subscriptions()
    {
    }
    /**
     * Refresh account and subscriptions from WooCommerce.com and serve subscriptions
     * as JSON.
     */
    public static function refresh()
    {
    }
    /**
     * Connect a WooCommerce.com subscription.
     *
     * @param WP_REST_Request $request Request object.
     */
    public static function connect($request)
    {
    }
    /**
     * Disconnect a WooCommerce.com subscription.
     *
     * @param WP_REST_Request $request Request object.
     */
    public static function disconnect($request)
    {
    }
    /**
     * Activate a WooCommerce.com product.
     * This activates the plugin/theme on the site.
     *
     * @param WP_REST_Request $request Request object.
     */
    public static function activate($request)
    {
    }
    /**
     * Get the install URL for a WooCommerce.com product.
     *
     * @param WP_REST_Request $request Request object.
     */
    public static function install_url($request)
    {
    }
}
