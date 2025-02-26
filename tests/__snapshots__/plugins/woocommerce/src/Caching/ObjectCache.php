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
abstract class ObjectCache extends \
{
    const DEFAULT_EXPIRATION = -1;

    /**
     * This needs to be set in each derived class.
     *
     * @var string
     */
    private $object_type = null;

    /**
     * Default value for the duration of the objects in the cache, in seconds
     * (may not be used depending on the cache engine used WordPress cache implementation).
     *
     * @var int
     */
    protected $default_expiration;

    /**
     * Temporarily used when retrieving data in 'get'.
     *
     * @var array
     */
    private $last_cached_data = null;

    /**
     * The cache engine to use.
     *
     * @var ?CacheEngine
     */
    private $cache_engine = null;

    /**
     * Gets an identifier for the types of objects cached by this class.
     * This identifier will be used to compose the keys passed to the cache engine.
     * It must be unique for each class inheriting from ObjectCache.
     *
     * @return string
     */
    public abstract function get_object_type(): string;

    /**
     * Creates a new instance of the class.
     *
     * @throws CacheException If get_object_type returns null or an empty string.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Get the default expiration time for cached objects, in seconds.
     *
     * @return int
     */
    public function get_default_expiration_value(): int
    {
        // stub
    }

    /**
     * Get the cache engine to use and cache it internally.
     *
     * @return CacheEngine
     */
    private function get_cache_engine(): Automattic\WooCommerce\Caching\CacheEngine
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Get the id from an object if the id itself is null.
     *
     * @param object|array    $object The object to get the id from.
     * @param int|string|null $id An object id or null.
     *
     * @return int|string|null Passed $id if it wasn't null, otherwise id obtained from $object using get_object_id.
     *
     * @throws CacheException Passed $id is null and get_object_id returned null too.
     */
    private function get_id_from_object_if_null($object, $id)
    {
        // stub
    }

    /**
     * Check if the given expiration time value is valid, throw an exception if not.
     *
     * @param int $expiration Expiration time to check.
     * @return void
     * @throws CacheException Expiration time is negative or higher than MAX_EXPIRATION.
     */
    private function verify_expiration_value(int $expiration): void
    {
        // stub
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
        // stub
    }

    /**
     * Remove an object from the cache.
     *
     * @param int|string $id The id of the object to remove.
     * @return bool True if the object is removed from the cache successfully, false otherwise (because the object wasn't cached or for other reason).
     */
    public function remove($id): bool
    {
        // stub
    }

    /**
     * Remove all the objects from the cache.
     *
     * @return bool True on success, false on error.
     */
    public function flush(): bool
    {
        // stub
    }

    /**
     * Is a given object cached?
     *
     * @param int|string $id The id of the object to check.
     * @return bool True if there's a cached object with the specified id.
     */
    public function is_cached($id): bool
    {
        // stub
    }

    /**
     * Get the id of an object. This is used by 'set' when a null id is passed.
     * If the object id can't be determined the method must return null.
     *
     * @param array|object $object The object to get the id for.
     * @return int|string|null
     */
    protected abstract function get_object_id($object);

    /**
     * Validate an object before it's cached.
     *
     * @param array|object $object Object to validate.
     * @return array|null An array with validation error messages, null or an empty array if there are no errors.
     */
    protected abstract function validate($object): array|null;

    /**
     * Get the instance of the cache engine to use.
     *
     * @return CacheEngine
     */
    protected function get_cache_engine_instance(): Automattic\WooCommerce\Caching\CacheEngine
    {
        // stub
    }

    /**
     * Get a random string to be used to compose the cache key prefix.
     * It should return a different string each time.
     *
     * @return string
     */
    protected function get_random_string(): string
    {
        // stub
    }

}

