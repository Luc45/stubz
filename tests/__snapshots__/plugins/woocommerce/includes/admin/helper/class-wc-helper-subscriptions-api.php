<?php

namespace ;

/**
 * WC_Helper_Subscriptions_API
 *
 * The main entry-point for all things related to the Marketplace Subscriptions API.
 * The Subscriptions API manages WooCommerce.com Subscriptions.
 */
class WC_Helper_Subscriptions_API extends \
{
    /**
     * Loads the class, runs on init
     *
     * @return void
     */
    public static function load()
    {
        // stub
    }

    /**
     * Registers the REST routes for the Marketplace Subscriptions API.
     * These endpoints are used by the Marketplace Subscriptions React UI.
     */
    public static function register_rest_routes()
    {
        // stub
    }

    /**
     * The Extensions page can only be accessed by users with the manage_woocommerce
     * capability. So the API mimics that behavior.
     */
    public static function get_permission()
    {
        // stub
    }

    /**
     * Fetch subscriptions from WooCommerce.com and serve them
     * as JSON.
     */
    public static function get_subscriptions()
    {
        // stub
    }

    /**
     * Refresh account and subscriptions from WooCommerce.com and serve subscriptions
     * as JSON.
     */
    public static function refresh()
    {
        // stub
    }

    /**
     * Connect a WooCommerce.com subscription.
     *
     * @param WP_REST_Request $request Request object.
     */
    public static function connect($request)
    {
        // stub
    }

    /**
     * Disconnect a WooCommerce.com subscription.
     *
     * @param WP_REST_Request $request Request object.
     */
    public static function disconnect($request)
    {
        // stub
    }

    /**
     * Activate a WooCommerce.com product.
     * This activates the plugin/theme on the site.
     *
     * @param WP_REST_Request $request Request object.
     */
    public static function activate($request)
    {
        // stub
    }

    /**
     * Get the install URL for a WooCommerce.com product.
     *
     * @param WP_REST_Request $request Request object.
     */
    public static function install_url($request)
    {
        // stub
    }

}

