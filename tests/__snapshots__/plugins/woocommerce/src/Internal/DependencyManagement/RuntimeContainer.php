<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement;

/**
 * Dependency injection container used at runtime.
 *
 * This is a simple container that doesn't implement explicit class registration.
 * Instead, all the classes in the Automattic\WooCommerce namespace can be resolved
 * and are considered as implicitly registered as single-instance classes
 * (so each class will be instantiated only once and the instance will be cached).
 */
class RuntimeContainer
{
    const WOOCOMMERCE_NAMESPACE = 'Automattic\\WooCommerce\\';

    /**
     * Cache of classes already resolved.
     *
     * @var array
     */
    protected array $resolved_cache;

    /**
     * A copy of the initial resolved classes cache passed to the constructor.
     *
     * @var array
     */
    protected array $initial_resolved_cache;

    /**
     * Initializes a new instance of the class.
     *
     * @param array $initial_resolved_cache Dictionary of class name => instance, to be used as the starting point for the resolved classes cache.
     */
    public function __construct(array $initial_resolved_cache)
{
}
    /**
     * Get an instance of a class.
     *
     * ContainerException will be thrown in these cases:
     *
     * - $class_name is outside the WooCommerce root namespace (and wasn't included in the initial resolve cache).
     * - The class referred by $class_name doesn't exist.
     * - Recursive resolution condition found.
     * - Reflection exception thrown when instantiating or initializing the class.
     *
     * A "recursive resolution condition" happens when class A depends on class B and at the same time class B depends on class A, directly or indirectly;
     * without proper handling this would lead to an infinite loop.
     *
     * Note that this method throwing ContainerException implies that code fixes are needed, it's not an error condition that's recoverable at runtime.
     *
     * @param string $class_name The class name.
     *
     * @return object The instance of the requested class.
     * @throws ContainerException Error when resolving the class to an object instance.
     * @throws \Exception Exception thrown in the constructor or in the 'init' method of one of the resolved classes.
     */
    public function get(string $class_name)
{
}
    /**
     * Core function to get an instance of a class.
     *
     * @param string $class_name The class name.
     * @param array  $resolve_chain Classes already resolved in this resolution chain. Passed between recursive calls to the method in order to detect a recursive resolution condition.
     * @return object The resolved object.
     * @throws ContainerException Error when resolving the class to an object instance.
     */
    protected function get_core(string $class_name, array &$resolve_chain)
{
}
    /**
     * Get an instance of a class using reflection.
     * This method recursively calls 'get_core' (which in turn calls this method) for each of the arguments
     * in the 'init' method of the resolved class (if the method is public and non-static).
     *
     * @param string $class_name The name of the class to resolve.
     * @param array  $resolve_chain Classes already resolved in this resolution chain. Passed between recursive calls to the method in order to detect a recursive resolution condition.
     * @return object The resolved object.
     *
     * @throws ContainerException The 'init' method has invalid arguments.
     * @throws \ReflectionException Something went wrong when using reflection to get information about the class to resolve.
     */
    private function instantiate_class_using_reflection(string $class_name, array &$resolve_chain): object
{
}
    /**
     * Tells if the 'get' method can be used to resolve a given class.
     *
     * @param string $class_name The class name.
     * @return bool True if the class with the supplied name can be resolved with 'get'.
     */
    public function has(string $class_name): bool
{
}
    /**
     * Checks to see whether a class is allowed to be registered.
     *
     * @param string $class_name The class to check.
     *
     * @return bool True if the class is allowed to be registered, false otherwise.
     */
    protected function is_class_allowed(string $class_name): bool
{
}
    /**
     * Tells if this class should be used as the core WooCommerce dependency injection container (or if the old ExtendedContainer should be used instead).
     *
     * By default, this returns true, to have it return false you can:
     *
     * 1. Define the WOOCOMMERCE_USE_OLD_DI_CONTAINER constant with a value of true; or
     * 2. Hook on the 'woocommerce_use_old_di_container' filter and have it return false (it receives the value of WOOCOMMERCE_USE_OLD_DI_CONTAINER, or false if the constant doesn't exist).
     *
     * @return bool True if this class should be used as the core WooCommerce dependency injection container, false if ExtendedContainer should be used instead.
     */
    public static function should_use(): bool
{
}
}