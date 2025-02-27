<?php

namespace Automattic\WooCommerce\Vendor\League\Container;

class Container
{
    /**
     * @var boolean
     */
    protected $defaultToShared = false;

    /**
     * @var DefinitionAggregateInterface
     */
    protected $definitions = null;

    /**
     * @var ServiceProviderAggregateInterface
     */
    protected $providers = null;

    /**
     * @var InflectorAggregateInterface
     */
    protected $inflectors = null;

    /**
     * @var ContainerInterface[]
     */
    protected $delegates = array (
);

    /**
     * Construct.
     *
     * @param DefinitionAggregateInterface|null      $definitions
     * @param ServiceProviderAggregateInterface|null $providers
     * @param InflectorAggregateInterface|null       $inflectors
     */
    public function __construct(Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionAggregateInterface|null $definitions = null, Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderAggregateInterface|null $providers = null, Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorAggregateInterface|null $inflectors = null)
    {
        // stub
    }

    /**
     * Add an item to the container.
     *
     * @param string  $id
     * @param mixed   $concrete
     * @param boolean $shared
     *
     * @return DefinitionInterface
     */
    public function add(string $id, $concrete = null, bool|null $shared = null): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
        // stub
    }

    /**
     * Proxy to add with shared as true.
     *
     * @param string $id
     * @param mixed  $concrete
     *
     * @return DefinitionInterface
     */
    public function share(string $id, $concrete = null): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
        // stub
    }

    /**
     * Whether the container should default to defining shared definitions.
     *
     * @param boolean $shared
     *
     * @return self
     */
    public function defaultToShared(bool $shared = true): Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface
    {
        // stub
    }

    /**
     * Get a definition to extend.
     *
     * @param string $id [description]
     *
     * @return DefinitionInterface
     */
    public function extend(string $id): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
        // stub
    }

    /**
     * Add a service provider.
     *
     * @param ServiceProviderInterface|string $provider
     *
     * @return self
     */
    public function addServiceProvider($provider): self
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function get($id, bool $new = false)
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function has($id): bool
    {
        // stub
    }

    /**
     * Allows for manipulation of specific types on resolution.
     *
     * @param string        $type
     * @param callable|null $callback
     *
     * @return InflectorInterface
     */
    public function inflector(string $type, callable|null $callback = null): Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
    {
        // stub
    }

    /**
     * Delegate a backup container to be checked for services if it
     * cannot be resolved via this container.
     *
     * @param ContainerInterface $container
     *
     * @return self
     */
    public function delegate(Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface $container): self
    {
        // stub
    }

}