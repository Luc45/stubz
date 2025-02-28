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
    final public static function instance()
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
    final public function __wakeup()
    {
    }
}
