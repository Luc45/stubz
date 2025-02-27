<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the Marketplace namespace.
 */
class MarketplaceServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\Marketplace',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}