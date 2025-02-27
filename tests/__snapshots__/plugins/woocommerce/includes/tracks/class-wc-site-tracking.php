<?php

/**
 * This class adds actions to track usage of WooCommerce.
 */
class WC_Site_Tracking
{
    /**
     * Check if tracking is enabled.
     *
     * @return bool
     */
    public static function is_tracking_enabled()
    {
        // stub
    }

    /**
     * Register scripts required to record events from javascript.
     */
    public static function register_scripts()
    {
        // stub
    }

    /**
     * Add scripts required to record events from javascript.
     */
    public static function enqueue_scripts()
    {
        // stub
    }

    /**
     * Adds the tracking function to the admin footer.
     */
    public static function add_tracking_function()
    {
        // stub
    }

    /**
     * Adds a function to load tracking scripts and enable them client-side on the fly.
     * Note that this function does not update `woocommerce_allow_tracking` in the database
     * and will not persist enabled tracking across page loads.
     */
    public static function add_enable_tracking_function()
    {
        // stub
    }

    /**
     * Init tracking.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Sets a cookie for tracking purposes, but only if tracking is enabled/allowed.
     *
     * @internal
     * @since 9.2.0
     *
     * @param string $cookie_key   The key of the cookie.
     * @param string $cookie_value The value of the cookie.
     * @param int    $expire       Expiry of the cookie.
     * @param bool   $secure       Whether the cookie should be served only over https.
     * @param bool   $http_only    Whether the cookie is only accessible over HTTP.
     *
     * @return bool If setting the cookie was attempted (will be false if tracking is not allowed).
     */
    public static function set_tracking_cookie(string $cookie_key, string $cookie_value, int $expire = 0, bool $secure = false, bool $http_only = false): bool
    {
        // stub
    }

}
