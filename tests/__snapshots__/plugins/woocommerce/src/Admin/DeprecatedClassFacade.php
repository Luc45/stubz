<?php

namespace Automattic\WooCommerce\Admin;

/**
 * A facade to allow deprecating an entire class.
 */
class DeprecatedClassFacade
{
    /**
     * The instance that this facade covers over.
     *
     * @var object
     */
    protected $instance = null;
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = '';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '';
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Executes when calling any function on an instance of this class.
     *
     * @param string $name      The name of the function being called.
     * @param array  $arguments An array of the arguments to the function call.
     */
    public function __call($name, $arguments)
{
}
    /**
     * Executes when calling any static function on this class.
     *
     * @param string $name      The name of the function being called.
     * @param array  $arguments An array of the arguments to the function call.
     */
    public static function __callStatic($name, $arguments)
{
}
}