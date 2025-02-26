<?php

namespace Automattic\WooCommerce\Caching;

/**
 * Implementation of CacheEngine that uses the built-in WordPress cache.
 */
class WPCacheEngine
{
    /**
     * Retrieves an object cached under a given key.
     *
     * @param string $key The key under which the object to retrieve is cached.
     * @param string $group The group under which the object is cached.
     *
     * @return array|object|null The cached object, or null if there's no object cached under the passed key.
     */
    public function get_cached_object(string $key, string $group = '')
    {
        // stub
    }

    /**
     * Retrieves a set of objects cached under the given keys.
     *
     * @param string[] $keys The keys under which the object to retrieve is cached.
     * @param string   $group The group under which the object is cached.
     *
     * @return array The cached array of objects keyed by the given keys, values will be null for any non-cached keys.
     */
    public function get_cached_objects(array $keys, string $group = '')
    {
        // stub
    }

    /**
     * Caches an object under a given key, and with a given expiration.
     *
     * @param string       $key The key under which the object will be cached.
     * @param array|object $object The object to cache.
     * @param int          $expiration Expiration for the cached object, in seconds.
     * @param string       $group The group under which the object will be cached.
     *
     * @return bool True if the object is cached successfully, false otherwise.
     */
    public function cache_object(string $key, $object, int $expiration, string $group = ''): bool
    {
        // stub
    }

    /**
     * Caches an object under a given key, and with a given expiration.
     *
     * @param array  $objects The objects to cache keyed by the key to cache under.
     * @param int    $expiration Expiration for the cached object, in seconds.
     * @param string $group The group under which the object will be cached.
     *
     * @return array Array of return values, grouped by key. Each value is either
     *                true on success, or false on failure
     */
    public function cache_objects(array $objects, int $expiration, string $group = ''): array
    {
        // stub
    }

    /**
     * Removes a cached object from the cache.
     *
     * @param string $key They key under which the object is cached.
     * @param string $group The group under which the object is cached.
     *
     * @return bool True if the object is removed from the cache successfully, false otherwise (because the object wasn't cached or for other reason).
     */
    public function delete_cached_object(string $key, string $group = ''): bool
    {
        // stub
    }

    /**
     * Checks if an object is cached under a given key.
     *
     * @param string $key The key to verify.
     * @param string $group The group under which the object is cached.
     *
     * @return bool True if there's an object cached under the given key, false otherwise.
     */
    public function is_cached(string $key, string $group = ''): bool
    {
        // stub
    }

    /**
     * Deletes all cached objects under a given group.
     *
     * @param string $group The group to delete.
     *
     * @return bool True if the group is deleted successfully, false otherwise.
     */
    public function delete_cache_group(string $group = ''): bool
    {
        // stub
    }

}

