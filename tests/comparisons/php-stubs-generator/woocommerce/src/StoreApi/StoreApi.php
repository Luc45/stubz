<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * StoreApi Main Class.
 */
final class StoreApi
{
    /**
     * Init and hook in Store API functionality.
     */
    public function init()
    {
    }
    /**
     * Loads the DI container for Store API.
     *
     * @internal This uses the Blocks DI container. If Store API were to move to core, this container could be replaced
     * with a different compatible container.
     *
     * @param boolean $reset Used to reset the container to a fresh instance. Note: this means all dependencies will be reconstructed.
     * @return mixed
     */
    public static function container($reset = false)
    {
    }
}