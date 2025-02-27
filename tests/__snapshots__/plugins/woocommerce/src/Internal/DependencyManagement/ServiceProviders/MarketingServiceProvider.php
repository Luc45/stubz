<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the non-static utils classes in the Automattic\WooCommerce\src namespace.
 *
 * @since x.x.x
 */
class MarketingServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\Marketing\\MarketingSpecs',
  1 => 'Automattic\\WooCommerce\\Admin\\Marketing\\MarketingChannels',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}

const WC_MCM_EXISTS = true;