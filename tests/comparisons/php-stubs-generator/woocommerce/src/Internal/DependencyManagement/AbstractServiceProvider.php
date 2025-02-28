<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement;

/**
 * Base class for the service providers used to register classes in the container.
 *
 * See the documentation of the original class this one is based on (https://container.thephpleague.com/3.x/service-providers)
 * for basic usage details. What this class adds is:
 *
 * - The `add_with_auto_arguments` method that allows to register classes without having to specify the injection method arguments.
 * - The `share_with_auto_arguments` method, sibling of the above.
 * - Convenience `add` and `share` methods that are just proxies for the same methods in `$this->getContainer()`.
 *
 * Note that `AbstractInterfaceServiceProvider` likely serves as a better base class for service providers
 * tasked with registering classes that implement interfaces.
 */
abstract class AbstractServiceProvider extends \Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\AbstractServiceProvider
{
    /**
     * Register a class in the container and use reflection to guess the injection method arguments.
     *
     * WARNING: this method uses reflection, so please have performance in mind when using it.
     *
     * @param string $class_name Class name to register.
     * @param mixed  $concrete   The concrete to register. Can be a shared instance, a factory callback, or a class name.
     * @param bool   $shared Whether to register the class as shared (`get` always returns the same instance) or not.
     *
     * @return DefinitionInterface The generated container definition.
     *
     * @throws ContainerException Error when reflecting the class, or class injection method is not public, or an argument has no valid type hint.
     */
    protected function add_with_auto_arguments(string $class_name, $concrete = null, bool $shared = false) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * Register a class in the container and use reflection to guess the injection method arguments.
     * The class is registered as shared, so `get` on the container always returns the same instance.
     *
     * WARNING: this method uses reflection, so please have performance in mind when using it.
     *
     * @param string $class_name Class name to register.
     * @param mixed  $concrete   The concrete to register. Can be a shared instance, a factory callback, or a class name.
     *
     * @return DefinitionInterface The generated container definition.
     *
     * @throws ContainerException Error when reflecting the class, or class injection method is not public, or an argument has no valid type hint.
     */
    protected function share_with_auto_arguments(string $class_name, $concrete = null) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * Register an entry in the container.
     *
     * @param string     $id Entry id (typically a class or interface name).
     * @param mixed|null $concrete Concrete entity to register under that id, null for automatic creation.
     * @param bool|null  $shared Whether to register the class as shared (`get` always returns the same instance) or not.
     *
     * @return DefinitionInterface The generated container definition.
     */
    protected function add(string $id, $concrete = null, ?bool $shared = null) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * Register a shared entry in the container (`get` always returns the same instance).
     *
     * @param string     $id Entry id (typically a class or interface name).
     * @param mixed|null $concrete Concrete entity to register under that id, null for automatic creation.
     *
     * @return DefinitionInterface The generated container definition.
     */
    protected function share(string $id, $concrete = null) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
}