<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the classes in the Automattic\WooCommerce\Proxies namespace.
 */
class ProxiesServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Proxies\LegacyProxy::class, \Automattic\WooCommerce\Proxies\ActionsProxy::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}
