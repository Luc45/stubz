<?php

namespace Automattic\WooCommerce\Caching;

/**
 * Implements namespacing algorithm to simulate grouping and namespacing for wp_cache, memcache and other caching engines that don't support grouping natively.
 *
 * See the algorithm details here: https://github.com/memcached/memcached/wiki/ProgrammingTricks#namespacing.
 *
 * To use the namespacing algorithm in the CacheEngine class:
 * 1. Use a group string to identify all objects of a type.
 * 2. Before setting cache, prefix the cache key by using the `get_cache_prefix`.
 * 3. Use `invalidate_cache_group` function to invalidate all caches in entire group at once.
 */
trait CacheNameSpaceTrait
{
    /**
     * Get prefix for use with wp_cache_set. Allows all cache in a group to be invalidated at once.
     *
     * @param  string $group Group of cache to get.
     * @return string Prefix.
     */
    public static function get_cache_prefix($group)
    {
    }
    /**
     * Increment group cache prefix (invalidates cache).
     *
     * @param string $group Group of cache to clear.
     */
    public static function incr_cache_prefix($group)
    {
    }
    /**
     * Invalidate cache group.
     *
     * @param string $group Group of cache to clear.
     * @since 3.9.0
     */
    public static function invalidate_cache_group($group)
    {
    }
    /**
     * Helper method to get prefixed key.
     *
     * @param  string $key   Key to prefix.
     * @param  string $group Group of cache to get.
     *
     * @return string Prefixed key.
     */
    public static function get_prefixed_key($key, $group)
    {
    }
}