<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * SiteHealth class.
 */
class SiteHealth
{
    /**
     * Class instance.
     *
     * @var SiteHealth instance
     */
    protected static $instance = null;

    /**
     * Get class instance.
     */
    public static function get_instance()
{
}
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
{
}
    /**
     * Counts specific types of WooCommerce entities to determine if a persistent object cache would be beneficial.
     *
     * Note that if all measured WooCommerce entities are below their thresholds, this will return null so that the
     * other normal WordPress checks will still be run.
     *
     * @param true|null $check A non-null value will short-circuit WP's normal tests for this.
     *
     * @return true|null True if the store would benefit from a persistent object cache. Otherwise null.
     */
    public function should_suggest_persistent_object_cache($check)
{
}
}