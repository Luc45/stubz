<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Class BatchProcessingServiceProvider
 *
 * @package Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders
 */
class BatchProcessingServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders\AbstractInterfaceServiceProvider
{
    /**
     * Services provided by this provider.
     *
     * @var string[]
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessingController::class, \Automattic\WooCommerce\Internal\OrderCouponDataMigrator::class);
    /**
     * Use the register method to register items with the container via the
     * protected $this->leagueContainer property or the `getLeagueContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {
    }
}
