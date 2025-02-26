<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the object cache mechanism.
 */
class ObjectCacheServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(
  0 => 'Automattic\\WooCommerce\\Caching\\WPCacheEngine',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}

