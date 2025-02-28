<?php

namespace Automattic\WooCommerce\Caching;

/**
 * Base class for caching objects (or associative arrays) that have a unique identifier.
 * At the very least, derived classes need to implement the 'get_object_type' method,
 * but usually it will be convenient to override some of the other protected members.
 *
 * The actual caching is delegated to an instance of CacheEngine. By default WpCacheEngine is used,
 * but a different engine can be used by either overriding the get_cache_engine_instance method
 * or capturing the wc_object_cache_get_engine filter.
 *
 * Objects are identified by ids that are either integers or strings. The actual cache keys passed
 * to the cache engine will be prefixed with the object type and a random string. The 'flush' operation
 * just forces the generation a new prefix and lets the old cached objects expire.
 */
abstract class ObjectCache
{
    /**
     * Expiration value to be passed to 'set' to use the value of $default_expiration.
     */
    public const DEFAULT_EXPIRATION = -1;
    /**
     * Maximum expiration time value, in seconds, that can be passed to 'set'.
     */
    public const MAX_EXPIRATION = MONTH_IN_SECONDS;
    /**
     * Default value for the duration of the objects in the cache, in seconds
     * (may not be used depending on the cache engine used WordPress cache implementation).
     *
     * @var int
     */
    protected $default_expiration;
    /**
     * Gets an identifier for the types of objects cached by this class.
     * This identifier will be used to compose the keys passed to the cache engine.
     * It must be unique for each class inheriting from ObjectCache.
     *
     * @return string
     */
    abstract public function get_object_type(): string;
    /**
     * Creates a new instance of the class.
     *
     * @throws CacheException If get_object_type returns null or an empty string.
     */
    public function __construct()
{
}
    /**
     * Get the default expiration time for cached objects, in seconds.
     *
     * @return int
     */
    public function get_default_expiration_value(): int
{
}
    /**
     * Add an object to the cache, or update an already cached object.
     *
     * @param object|array    $object The object to be cached.
     * @param int|string|null $id Id of the object to be cached, if null, get_object_id will be used to get it.
     * @param int             $expiration Expiration of the cached data in seconds from the current time, or DEFAULT_EXPIRATION to use the default value.
     * @return bool True on success, false on error.
     * @throws CacheException Invalid parameter, or null id was passed and get_object_id returns null too.
     */
    public function set($object, $id = null, int $expiration = -1): bool
{
}
    /**
     * Update an object in the cache, but only if an object is already cached with the same id.
     *
     * @param object|array    $object The new object that will replace the already cached one.
     * @param int|string|null $id Id of the object to be cached, if null, get_object_id will be used to get it.
     * @param int             $expiration Expiration of the cached data in seconds from the current time, or DEFAULT_EXPIRATION to use the default value.
     * @return bool True on success, false on error or if no object with the supplied id was cached.
     * @throws CacheException Invalid parameter, or null id was passed and get_object_id returns null too.
     */
    public function update_if_cached($object, $id = null, int $expiration = -1): bool
{
}
    /**
     * Retrieve a cached object, and if no object is cached with the given id,
     * try to get one via get_from_datastore method or by supplying a callback and then cache it.
     *
     * If you want to provide a callable but still use the default expiration value,
     * pass "ObjectCache::DEFAULT_EXPIRATION" as the second parameter.
     *
     * @param int|string    $id The id of the object to retrieve.
     * @param int           $expiration Expiration of the cached data in seconds from the current time, used if an object is retrieved from datastore and cached.
     * @param callable|null $get_from_datastore_callback Optional callback to get the object if it's not cached, it must return an object/array or null.
     * @return object|array|null Cached object, or null if it's not cached and can't be retrieved from datastore or via callback.
     * @throws CacheException Invalid id parameter.
     */
    public function get($id, int $expiration = -1, callable|null $get_from_datastore_callback = null)
{
}
    /**
     * Remove an object from the cache.
     *
     * @param int|string $id The id of the object to remove.
     * @return bool True if the object is removed from the cache successfully, false otherwise (because the object wasn't cached or for other reason).
     */
    public function remove($id): bool
{
}
    /**
     * Remove all the objects from the cache.
     *
     * @return bool True on success, false on error.
     */
    public function flush(): bool
{
}
    /**
     * Is a given object cached?
     *
     * @param int|string $id The id of the object to check.
     * @return bool True if there's a cached object with the specified id.
     */
    public function is_cached($id): bool
{
}
    /**
     * Get the id of an object. This is used by 'set' when a null id is passed.
     * If the object id can't be determined the method must return null.
     *
     * @param array|object $object The object to get the id for.
     * @return int|string|null
     */
    abstract protected function get_object_id($object);
    /**
     * Validate an object before it's cached.
     *
     * @param array|object $object Object to validate.
     * @return array|null An array with validation error messages, null or an empty array if there are no errors.
     */
    abstract protected function validate($object): array|null;
    /**
     * Get the instance of the cache engine to use.
     *
     * @return CacheEngine
     */
    protected function get_cache_engine_instance(): Automattic\WooCommerce\Caching\CacheEngine
{
}
    /**
     * Get a random string to be used to compose the cache key prefix.
     * It should return a different string each time.
     *
     * @return string
     */
    protected function get_random_string(): string
{
}
}