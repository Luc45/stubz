<?php

namespace Automattic\WooCommerce\Vendor\League\Container\ServiceProvider;

interface BootableServiceProviderInterface extends \Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderInterface
{
    /**
     * Method will be invoked on registration of a service provider implementing
     * this interface. Provides ability for eager loading of Service Providers.
     *
     * @return void
     */
    public function boot();
}