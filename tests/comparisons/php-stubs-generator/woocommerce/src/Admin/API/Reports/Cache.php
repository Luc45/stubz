<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * REST API Reports Cache class.
 */
class Cache
{
    /**
     * Cache version. Used to invalidate all cached values.
     */
    const VERSION_OPTION = 'woocommerce_reports';
    /**
     * Invalidate cache.
     */
    public static function invalidate()
    {
    }
    /**
     * Get cache version number.
     *
     * @return string
     */
    public static function get_version()
    {
    }
    /**
     * Get cached value.
     *
     * @param string $key Cache key.
     * @return mixed
     */
    public static function get($key)
    {
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
    }
}