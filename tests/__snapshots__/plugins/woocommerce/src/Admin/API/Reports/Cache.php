<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * REST API Reports Cache class.
 */
class Cache
{
    const VERSION_OPTION = 'woocommerce_reports';

    /**
     * Invalidate cache.
     */
    public static function invalidate()
    {
        // stub
    }

    /**
     * Get cache version number.
     *
     * @return string
     */
    public static function get_version()
    {
        // stub
    }

    /**
     * Get cached value.
     *
     * @param string $key Cache key.
     * @return mixed
     */
    public static function get($key)
    {
        // stub
    }

    /**
     * Update cached value.
     *
     * @param string $key   Cache key.
     * @param mixed  $value New value.
     * @return bool
     */
    public static function set($key, $value)
    {
        // stub
    }

}