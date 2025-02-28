<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the orders controller classes in the Automattic\WooCommerce\Internal\Orders namespace.
 */
class OrdersControllersServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders\AbstractInterfaceServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Orders\\CouponsController',
  1 => 'Automattic\\WooCommerce\\Internal\\Orders\\TaxesController',
  2 => 'Automattic\\WooCommerce\\Internal\\Orders\\OrderActionsRestController',
);
    /**
     * Register the classes.
     */
    public function register()
{
}
}