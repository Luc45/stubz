<?php

namespace Automattic\WooCommerce\Caches;

/**
 * A class to cache order objects.
 */
class OrderCache
{
    /**
     * Get the cache key and prefix to use for Orders.
     *
     * @return string
     */
    public function get_object_type(): string
{
}
    /**
     * Get the id of an object to be cached.
     *
     * @param array|object $object The object to be cached.
     * @return int|string|null The id of the object, or null if it can't be determined.
     */
    protected function get_object_id($object)
{
}
    /**
     * Validate an object before caching it.
     *
     * @param array|object $object The object to validate.
     * @return string[]|null An array of error messages, or null if the object is valid.
     */
    protected function validate($object): array|null
{
}
}