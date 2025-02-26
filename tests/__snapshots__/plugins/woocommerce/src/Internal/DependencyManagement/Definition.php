<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement;

/**
 * An extension of the definition class that replaces constructor injection with method injection.
 */
class Definition
{
    const INJECTION_METHOD = 'init';

    /**
     * Resolve a class using method injection instead of constructor injection.
     *
     * @param string $concrete The concrete to instantiate.
     *
     * @return object
     */
    protected function resolveClass(string $concrete)
    {
        // stub
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
        // stub
    }

    /**
     * Invoke the 'init' method on a resolved object.
     *
     * Constructor injection causes backwards compatibility problems
     * so we will rely on method injection via an internal method.
     *
     * @param object $instance The resolved object.
     * @return void
     */
    private function invokeInit($instance)
    {
        // stub
    }

    /**
     * Forget the cached resolved object, so the next time it's requested
     * it will be resolved again.
     */
    public function forgetResolved()
    {
        // stub
    }

}

