<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the RestockRefundedItemsAdjuster class.
 */
class RestockRefundedItemsAdjusterServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\RestockRefundedItemsAdjuster',
);

    /**
     * Register the classes.
     */
    public function register()
{
}
}