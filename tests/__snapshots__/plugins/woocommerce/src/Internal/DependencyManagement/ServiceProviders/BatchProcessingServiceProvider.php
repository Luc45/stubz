<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Class BatchProcessingServiceProvider
 *
 * @package Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders
 */
class BatchProcessingServiceProvider
{
    /**
     * Services provided by this provider.
     *
     * @var string[]
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\BatchProcessing\\BatchProcessingController',
  1 => 'Automattic\\WooCommerce\\Internal\\OrderCouponDataMigrator',
);

    /**
     * Use the register method to register items with the container via the
     * protected $this->leagueContainer property or the `getLeagueContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {
        // stub
    }

}