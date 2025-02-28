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
    protected $provides = array(\Automattic\WooCommerce\Internal\Orders\CouponsController::class, \Automattic\WooCommerce\Internal\Orders\TaxesController::class, \Automattic\WooCommerce\Internal\Orders\OrderActionsRestController::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}
