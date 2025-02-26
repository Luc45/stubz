<?php

namespace Automattic\WooCommerce\Vendor\League\Container\ServiceProvider;

class ServiceProviderAggregate
{
    /**
     * @var ServiceProviderInterface[]
     */
    protected $providers = array (
);

    /**
     * @var array
     */
    protected $registered = array (
);

    /**
     * {@inheritdoc}
     */
    public function add($provider): Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderAggregateInterface
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function provides(string $service): bool
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator(): Generator
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function register(string $service)
    {
        // stub
    }

}

