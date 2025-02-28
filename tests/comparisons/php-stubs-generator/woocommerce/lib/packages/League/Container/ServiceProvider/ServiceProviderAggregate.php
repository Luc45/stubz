<?php

namespace Automattic\WooCommerce\Vendor\League\Container\ServiceProvider;

class ServiceProviderAggregate implements \Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderAggregateInterface
{
    use \Automattic\WooCommerce\Vendor\League\Container\ContainerAwareTrait;
    /**
     * @var ServiceProviderInterface[]
     */
    protected $providers = [];
    /**
     * @var array
     */
    protected $registered = [];
    /**
     * {@inheritdoc}
     */
    public function add($provider) : \Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderAggregateInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function provides(string $service) : bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIterator() : \Generator
    {
    }
    /**
     * {@inheritdoc}
     */
    public function register(string $service)
    {
    }
}