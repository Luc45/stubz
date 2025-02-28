<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\ProductCollection;

/**
 * HandlerRegistry class.
 * Manages collection handlers.
 */
class HandlerRegistry
{
    /**
     * Associative array of collection handlers.
     *
     * @var array
     */
    protected $collection_handler_store = array();
    /**
     * Register handlers for a collection.
     *
     * @param string        $collection_name The name of the collection.
     * @param callable      $build_query     The query builder callable.
     * @param callable|null $frontend_args   Optional frontend args callable.
     * @param callable|null $editor_args     Optional editor args callable.
     * @param callable|null $preview_query   Optional preview query callable.
     *
     * @throws InvalidArgumentException If handlers are already registered for the collection.
     */
    public function register_collection_handlers($collection_name, $build_query, $frontend_args = null, $editor_args = null, $preview_query = null)
{
}
    /**
     * Register core collection handlers.
     */
    public function register_core_collections()
{
}
    /**
     * Get collection handler by name.
     *
     * @param string $name Collection name.
     * @return array|null Collection handler array or null if not found.
     */
    public function get_collection_handler($name)
{
}
    /**
     * Removes any custom collection handlers for the given collection.
     *
     * @param string $collection_name The name of the collection to unregister.
     */
    public function unregister_collection_handlers($collection_name)
{
}
}