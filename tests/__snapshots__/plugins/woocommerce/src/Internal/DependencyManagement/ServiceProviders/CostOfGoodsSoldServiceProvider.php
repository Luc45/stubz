<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the Cost of Goods Sold feature.
 */
class CostOfGoodsSoldServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders\AbstractInterfaceServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(
  0 => 'Automattic\\WooCommerce\\Internal\\CostOfGoodsSold\\CostOfGoodsSoldController',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}

