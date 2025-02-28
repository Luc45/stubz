<?php

/**
 * WC_Helper_API Class
 *
 * Provides a communication interface with the WooCommerce.com Helper API.
 */
class WC_Helper_API
{
    /**
     * Base path for API routes.
     *
     * @var $api_base
     */
    public static $api_base;
    /**
     * Load
     *
     * Allow devs to point the API base to a local API development or staging server.
     * Note that sslverify will be turned off for the woocommerce.dev + WP_DEBUG combination.
     * The URL can be changed on plugins_loaded before priority 10.
     */
    public static function load()
    {
    }
    /**
     * Perform an HTTP request to the Helper API.
     *
     * @param string $endpoint The endpoint to request.
     * @param array  $args Additional data for the request. Set authenticated to a truthy value to enable auth.
     *
     * @return array|WP_Error The response from wp_safe_remote_request()
     */
    public static function request($endpoint, $args = array())
    {
    }
    /**
     * Add the access token and signature to the provided URL.
     *
     * @param string $url The URL to add the access token and signature to.
     * @return string
     */
    public static function add_auth_parameters(string $url): string
    {
    }
    /**
     * Wrapper for self::request().
     *
     * @param string $endpoint The helper API endpoint to request.
     * @param array  $args Arguments passed to wp_remote_request().
     *
     * @return array The response object from wp_safe_remote_request().
     */
    public static function get($endpoint, $args = array())
    {
    }
    /**
     * Wrapper for self::request().
     *
     * @param string $endpoint The helper API endpoint to request.
     * @param array  $args Arguments passed to wp_remote_request().
     *
     * @return array The response object from wp_safe_remote_request().
     */
    public static function post($endpoint, $args = array())
    {
    }
    /**
     * Wrapper for self::request().
     *
     * @param string $endpoint The helper API endpoint to request.
     * @param array  $args Arguments passed to wp_remote_request().
     *
     * @return array The response object from wp_safe_remote_request().
     */
    public static function put($endpoint, $args = array())
    {
    }
    /**
     * Using the API base, form a request URL from a given endpoint.
     *
     * @param string $endpoint The endpoint to request.
     * @param string $query_string Optional query string to append to the URL.
     *
     * @return string The absolute endpoint URL.
     */
    public static function url($endpoint, $query_string = '')
    {
    }
}
