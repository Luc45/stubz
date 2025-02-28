<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement;

/**
 * An extension of the definition class that replaces constructor injection with method injection.
 */
class Definition extends \Automattic\WooCommerce\Vendor\League\Container\Definition\Definition
{
    /**
     * The standard method that we use for dependency injection.
     */
    public const INJECTION_METHOD = 'init';
    /**
     * Resolve a class using method injection instead of constructor injection.
     *
     * @param string $concrete The concrete to instantiate.
     *
     * @return object
     */
    protected function resolveClass(string $concrete)
    {
    }
    /**
     * Invoke methods on resolved instance, including 'init'.
     *
     * @param object $instance The concrete to invoke methods on.
     *
     * @return object
     */
    protected function invokeMethods($instance)
    {
    }
    /**
     * Forget the cached resolved object, so the next time it's requested
     * it will be resolved again.
     */
    public function forgetResolved()
    {
    }
}
