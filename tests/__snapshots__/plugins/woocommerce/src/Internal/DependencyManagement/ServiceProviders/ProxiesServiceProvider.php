<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the classes in the Automattic\WooCommerce\Proxies namespace.
 */
class ProxiesServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Proxies\\LegacyProxy',
  1 => 'Automattic\\WooCommerce\\Proxies\\ActionsProxy',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}