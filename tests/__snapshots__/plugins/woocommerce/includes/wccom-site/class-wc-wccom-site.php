<?php

namespace ;

/**
 * WC_WCCOM_Site Class
 *
 * Main class for WooCommerce.com connected site.
 */
class WC_WCCOM_Site extends \
{
    const AUTH_ERROR_FILTER_NAME = 'wccom_auth_error';

    /**
     * Load the WCCOM site class.
     *
     * @since 3.7.0
     */
    public static function load()
    {
        // stub
    }

    /**
     * Include support files.
     *
     * @since 3.7.0
     */
    protected static function includes()
    {
        // stub
    }

    /**
     * Authenticate WooCommerce.com request.
     *
     * @since 3.7.0
     * @param int|false $user_id User ID.
     * @return int|false
     */
    public static function authenticate_wccom($user_id)
    {
        // stub
    }

    /**
     * Get the authorization header.
     *
     * On certain systems and configurations, the Authorization header will be
     * stripped out by the server or PHP. Typically this is then used to
     * generate `PHP_AUTH_USER`/`PHP_AUTH_PASS` but not passed on. We use
     * `getallheaders` here to try and grab it out instead.
     *
     * @since 3.7.0
     * @return string Authorization header if set.
     */
    protected static function get_authorization_header()
    {
        // stub
    }

    /**
     * Check if this is a request to WCCOM Site REST API.
     *
     * @since 3.7.0
     * @return bool
     */
    protected static function is_request_to_wccom_site_rest_api()
    {
        // stub
    }

    /**
     * Verify WooCommerce.com request from a given body and signature request.
     *
     * @since 3.7.0
     * @param string $body                Request body.
     * @param string $signature           Request signature found in X-Woo-Signature header.
     * @param string $access_token_secret Access token secret for this site.
     * @return bool
     */
    protected static function verify_wccom_request($body, $signature, $access_token_secret)
    {
        // stub
    }

    /**
     * Register wccom-site REST namespace.
     *
     * @since 3.7.0
     * @param array $namespaces List of registered namespaces.
     * @return array Registered namespaces.
     */
    public static function register_rest_namespace($namespaces)
    {
        // stub
    }

}

