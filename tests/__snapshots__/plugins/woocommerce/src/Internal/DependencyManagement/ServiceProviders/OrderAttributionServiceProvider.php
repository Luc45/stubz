<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Class OrderAttributionServiceProvider
 *
 * @since 8.5.0
 */
class OrderAttributionServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders\AbstractInterfaceServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Orders\\OrderAttributionController',
  1 => 'Automattic\\WooCommerce\\Internal\\Orders\\OrderAttributionBlocksController',
  2 => 'Automattic\\WooCommerce\\Internal\\Integrations\\WPConsentAPI',
);
    /**
     * Register the classes.
     */
    public function register()
{
}
}