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
    }
    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    public static final function instance()
    {
    }
    /**
     * Prevent cloning.
     */
    private function __clone()
    {
    }
    /**
     * Prevent unserializing.
     */
    public final function __wakeup()
    {
    }
}