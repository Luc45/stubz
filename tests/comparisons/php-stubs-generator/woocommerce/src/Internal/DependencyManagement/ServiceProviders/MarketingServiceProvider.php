<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the non-static utils classes in the Automattic\WooCommerce\src namespace.
 *
 * @since x.x.x
 */
class MarketingServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\Admin\Marketing\MarketingSpecs::class, \Automattic\WooCommerce\Admin\Marketing\MarketingChannels::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}