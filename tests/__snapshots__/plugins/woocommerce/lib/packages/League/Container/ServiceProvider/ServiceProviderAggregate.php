<?php

namespace Automattic\WooCommerce\Vendor\League\Container\ServiceProvider;

class ServiceProviderAggregate implements \Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderAggregateInterface
{
    /**
     * @var ServiceProviderInterface[]
     */
    protected $providers = array();
    /**
     * @var array
     */
    protected $registered = array();
    /**
     * {@inheritdoc}
     */
    public function add($provider): Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderAggregateInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function provides(string $service): bool
{
}
    /**
     * {@inheritdoc}
     */
    public function getIterator(): Generator
{
}
    /**
     * {@inheritdoc}
     */
    public function register(string $service)
{
}
}