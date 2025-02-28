<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the Stats.
 */
class StatsServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\McStats',
);

    /**
     * Register the classes.
     */
    public function register()
{
}
}