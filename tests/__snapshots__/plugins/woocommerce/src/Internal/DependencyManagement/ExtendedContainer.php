<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement;

/**
 * This class extends the original League's Container object by adding some functionality
 * that we need for WooCommerce.
 *
 * NOTE: This class will be removed in WooCommerce 10.0.
 */
class ExtendedContainer
{
    /**
     * The root namespace of all WooCommerce classes in the `src` directory.
     *
     * @var string
     */
    private $woocommerce_namespace = 'Automattic\\WooCommerce\\';

    /**
     * Holds the original registrations so that 'reset_replacement' can work, keys are class names and values are the original concretes.
     *
     * @var array
     */
    private $original_concretes = array (
);

    /**
     * Whitelist of classes that we can register using the container
     * despite not belonging to the WooCommerce root namespace.
     *
     * In general we allow only the registration of classes in the
     * WooCommerce root namespace to prevent registering 3rd party code
     * (which doesn't really belong to this container) or old classes
     * (which may be eventually deprecated, also the LegacyProxy
     * should be used for those).
     *
     * @var string[]
     */
    private $registration_whitelist = array (
  0 => 'Automattic\\WooCommerce\\Container',
);

    /**
     * A list of tags that have already been fully resolved, see 'get' for details.
     *
     * @var array
     */
    private array $known_tags = array (
);

    /**
     * Register a class in the container.
     *
     * @param string    $class_name Class name.
     * @param mixed     $concrete How to resolve the class with `get`: a factory callback, a concrete instance, another class name, or null to just create an instance of the class.
     * @param bool|null $shared Whether the resolution should be performed only once and cached.
     *
     * @return DefinitionInterface The generated definition for the container.
     * @throws ContainerException Invalid parameters.
     */
    public function add(string $class_name, $concrete = null, bool|null $shared = null): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
        // stub
    }

    /**
     * Replace an existing registration with a different concrete. See also 'reset_replacement' and 'reset_all_replacements'.
     *
     * @param string $class_name The class name whose definition will be replaced.
     * @param mixed  $concrete The new concrete (same as "add").
     *
     * @return DefinitionInterface The modified definition.
     * @throws ContainerException Invalid parameters.
     */
    public function replace(string $class_name, $concrete): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
        // stub
    }

    /**
     * Reset a replaced registration back to its original concrete.
     *
     * @param string $class_name The class name whose definition had been replaced.
     * @return bool True if the registration has been reset, false if no replacement had been made for the specified class name.
     */
    public function reset_replacement(string $class_name): bool
    {
        // stub
    }

    /**
     * Reset all the replaced registrations back to their original concretes.
     */
    public function reset_all_replacements()
    {
        // stub
    }

    /**
     * Reset all the cached resolutions, so any further "get" for shared definitions will generate the instance again.
     */
    public function reset_all_resolved()
    {
        // stub
    }

    /**
     * Get an instance of a registered class.
     *
     * @param string $id The class name.
     * @param bool   $new True to generate a new instance even if the class was registered as shared.
     *
     * @return object An instance of the requested class.
     * @throws ContainerException Attempt to get an instance of a non-namespaced class.
     */
    public function get($id, bool $new = false)
    {
        // stub
    }

    /**
     * Gets the class from the concrete regardless of type.
     *
     * @param mixed $concrete The concrete that we want the class from..
     *
     * @return string|null The class from the concrete if one is available, null otherwise.
     */
    protected function get_class_from_concrete($concrete)
    {
        // stub
    }

    /**
     * Checks to see whether or not a class is allowed to be registered.
     *
     * @param string $class_name The class to check.
     *
     * @return bool True if the class is allowed to be registered, false otherwise.
     */
    protected function is_class_allowed(string $class_name): bool
    {
        // stub
    }

    /**
     * Check if a class name corresponds to an anonymous class.
     *
     * @param string $class_name The class name to check.
     * @return bool True if the name corresponds to an anonymous class.
     */
    protected function is_anonymous_class(string $class_name): bool
    {
        // stub
    }

}

