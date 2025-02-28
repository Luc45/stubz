<?php

namespace Automattic\WooCommerce\Caches;

/**
 * A class to control the usage of the orders cache.
 */
class OrderCacheController
{
    /**
     * Class initialization, invoked by the DI container.
     *
     * @internal
     * @param OrderCache $order_cache The order cache engine to use.
     */
    public final function init(\Automattic\WooCommerce\Caches\OrderCache $order_cache)
    {
    }
    /**
     * Whether order cache usage is enabled. Currently, linked to custom orders' table usage.
     *
     * @return bool True if the order cache is enabled.
     */
    public function orders_cache_usage_is_enabled() : bool
    {
    }
    /**
     * Temporarily disable the order cache if it's enabled.
     *
     * This is a purely in-memory operation: a variable is created with the value
     * of the current enable status for the feature, and this variable
     * is checked by orders_cache_usage_is_enabled. In the next request the
     * feature will be again enabled or not depending on how the feature is set.
     */
    public function temporarily_disable_orders_cache_usage() : void
    {
    }
    /**
     * Check if the order cache has been temporarily disabled.
     *
     * @return bool True if the order cache is currently temporarily disabled.
     */
    public function orders_cache_usage_is_temporarly_disabled() : bool
    {
    }
    /**
     * Restore the order cache usage that had been temporarily disabled.
     */
    public function maybe_restore_orders_cache_usage() : void
    {
    }
}