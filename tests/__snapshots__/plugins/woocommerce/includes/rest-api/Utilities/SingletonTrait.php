<?php

namespace Automattic\WooCommerce\RestApi\Utilities;

/**
 * Singleton trait.
 */
trait SingletonTrait
{
    /**
     * The single instance of the class.
     *
     * @var object
     */
    protected static $instance = null;

    /**
     * Constructor
     *
     * @return void
     */
    protected function __construct()
    {
        // stub
    }

    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    public static final function instance()
    {
        // stub
    }

    /**
     * Prevent cloning.
     */
    private function __clone()
    {
        // stub
    }

    /**
     * Prevent unserializing.
     */
    public final function __wakeup()
    {
        // stub
    }

}