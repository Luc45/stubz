<?php

namespace Automattic\WooCommerce\Internal\Traits;

/**
 * DON'T USE THIS TRAIT. It will be removed in WooCommerce 10.5.
 * Instead, make the hook target methods public and mark them with an @internal annotation.
 *
 * This trait allows making private methods of a class accessible from outside.
 * This is useful to define hook handlers with the [$this, 'method'] or [__CLASS__, 'method'] syntax
 * without having to make the method public (and thus having to keep it forever for backwards compatibility).
 *
 * Example:
 *
 * class Foobar {
 *   use AccessiblePrivateMethods;
 *
 *   public function __construct() {
 *     self::add_action('some_action', [$this, 'handle_some_action']);
 *   }
 *
 *   public static function init() {
 *     self::add_filter('some_filter', [__CLASS__, 'handle_some_filter']);
 *   }
 *
 *   private function handle_some_action() {
 *   }
 *
 *   private static function handle_some_filter() {
 *   }
 * }
 *
 * For this to work the callback must be an array and the first element of the array must be either '$this', '__CLASS__',
 * or another instance of the same class; otherwise the method won't be marked as accessible
 * (but the corresponding WordPress 'add_action' and 'add_filter' functions will still be called).
 *
 * No special procedure is needed to remove hooks set up with these methods, the regular 'remove_action'
 * and 'remove_filter' functions provided by WordPress can be used as usual.
 *
 * @deprecated 9.6.0 Make the hook target methods public and mark them with an @internal annotation. This trait will be removed in WooCommerce 10.5.
 */
trait AccessiblePrivateMethods
{
    /**
     * List of instance methods marked as externally accessible.
     *
     * @var array
     */
    private $_accessible_private_methods = array(
);

    /**
     * List of static methods marked as externally accessible.
     *
     * @var array
     */
    private static $_accessible_static_private_methods = array(
);

    /**
     * Register a WordPress action.
     * If the callback refers to a private or protected instance method in this class, the method is marked as externally accessible.
     *
     * $callback can be a standard callable, or a string representing the name of a method in this class.
     *
     * @param string          $hook_name       The name of the action to add the callback to.
     * @param callable|string $callback        The callback to be run when the action is called.
     * @param int             $priority        Optional. Used to specify the order in which the functions
     *                                         associated with a particular action are executed.
     *                                         Lower numbers correspond with earlier execution,
     *                                         and functions with the same priority are executed
     *                                         in the order in which they were added to the action. Default 10.
     * @param int             $accepted_args   Optional. The number of arguments the function accepts. Default 1.
     */
    protected static function add_action(string $hook_name, $callback, int $priority = 10, int $accepted_args = 1): void
    {
        // stub
    }

    /**
     * Register a WordPress filter.
     * If the callback refers to a private or protected instance method in this class, the method is marked as externally accessible.
     *
     * $callback can be a standard callable, or a string representing the name of a method in this class.
     *
     * @param string          $hook_name       The name of the filter to add the callback to.
     * @param callable|string $callback        The callback to be run when the filter is called.
     * @param int             $priority        Optional. Used to specify the order in which the functions
     *                                         associated with a particular filter are executed.
     *                                         Lower numbers correspond with earlier execution,
     *                                         and functions with the same priority are executed
     *                                         in the order in which they were added to the filter. Default 10.
     * @param int             $accepted_args   Optional. The number of arguments the function accepts. Default 1.
     */
    protected static function add_filter(string $hook_name, $callback, int $priority = 10, int $accepted_args = 1): void
    {
        // stub
    }

    /**
     * Do the required processing to a callback before invoking the WordPress 'add_action' or 'add_filter' function.
     *
     * @param callable $callback The callback to process.
     * @return void
     */
    protected static function process_callback_before_hooking($callback): void
    {
        // stub
    }

    /**
     * Register a private or protected instance method of this class as externally accessible.
     *
     * @param string $method_name Method name.
     * @return bool True if the method has been marked as externally accessible, false if the method doesn't exist.
     */
    protected function mark_method_as_accessible(string $method_name): bool
    {
        // stub
    }

    /**
     * Register a private or protected static method of this class as externally accessible.
     *
     * @param string $method_name Method name.
     * @return bool True if the method has been marked as externally accessible, false if the method doesn't exist.
     */
    protected static function mark_static_method_as_accessible(string $method_name): bool
    {
        // stub
    }

    /**
     * Undefined/inaccessible instance method call handler.
     *
     * @param string $name Called method name.
     * @param array  $arguments Called method arguments.
     * @return mixed
     * @throws \Error The called instance method doesn't exist or is private/protected and not marked as externally accessible.
     */
    public function __call($name, $arguments)
    {
        // stub
    }

    /**
     * Undefined/inaccessible static method call handler.
     *
     * @param string $name Called method name.
     * @param array  $arguments Called method arguments.
     * @return mixed
     * @throws \Error The called static method doesn't exist or is private/protected and not marked as externally accessible.
     */
    public static function __callStatic($name, $arguments)
    {
        // stub
    }

}

