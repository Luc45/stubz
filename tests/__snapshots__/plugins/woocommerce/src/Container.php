<?php

namespace Automattic\WooCommerce;

/**
 * PSR11 compliant dependency injection container for WooCommerce.
 *
 * Classes in the `src` directory should specify dependencies from that directory via an 'init' method having arguments
 * with type hints. If an instance of the container itself is needed, the type hint to use is \Psr\Container\ContainerInterface.
 *
 * Classes in the `src` directory should interact with anything outside (especially code in the `includes` directory
 * and WordPress functions) by using the classes in the `Proxies` directory. The exception is idempotent
 * functions (e.g. `wp_parse_url`), those can be used directly.
 *
 * Classes in the `includes` directory should use the `wc_get_container` function to get the instance of the container when
 * they need to get an instance of a class from the `src` directory.
 *
 * Class registration should be done via service providers that inherit from Automattic\WooCommerce\Internal\DependencyManagement
 * and those should go in the `src\Internal\DependencyManagement\ServiceProviders` folder unless there's a good reason
 * to put them elsewhere. All the service provider class names must be in the `SERVICE_PROVIDERS` constant.
 *
 * IMPORTANT NOTE: By default an instance of RuntimeContainer will be used as the underlying container,
 * but it's possible to use the old ExtendedContainer (backed by the PHP League's container package) instead,
 * see RuntimeContainer::should_use() for configuration instructions.
 * The League's container, the ExtendedContainer class and the related support code will be removed in WooCommerce 10.0.
 */
final class Container
{
    /**
     * The underlying container.
     *
     * @var RuntimeContainer
     */
    private $container = null;
    /**
     * Class constructor.
     */
    public function __construct()
{
}
    /**
     * Finds an entry of the container by its identifier and returns it.
     * See the comment about ContainerException in RuntimeContainer::get.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return mixed Resolved entry.
     *
     * @throws NotFoundExceptionInterface No entry was found for the supplied identifier (only when using ExtendedContainer).
     * @throws Psr\Container\ContainerExceptionInterface Error while retrieving the entry.
     * @throws ContainerException Error when resolving the class to an object instance, or (when using RuntimeContainer) class not found.
     * @throws \Exception Exception thrown in the constructor or in the 'init' method of one of the resolved classes.
     */
    public function get(string $id)
{
}
    /**
     * Returns true if the container can return an entry for the given identifier.
     * Returns false otherwise.
     *
     * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
     * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return bool
     */
    public function has(string $id): bool
{
}
    /**
     * The list of service provider classes to register.
     *
     * @var string[]
     */
    private function get_service_providers(): array
{
}
}