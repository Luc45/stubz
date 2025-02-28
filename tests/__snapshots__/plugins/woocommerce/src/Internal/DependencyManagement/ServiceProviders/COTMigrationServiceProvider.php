<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Class COTMigrationServiceProvider
 *
 * @package Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders
 */
class COTMigrationServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * Services provided by this provider.
     *
     * @var string[]
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Database\\Migrations\\CustomOrderTable\\PostsToOrdersMigrationController',
  1 => 'Automattic\\WooCommerce\\Database\\Migrations\\CustomOrderTable\\CLIRunner',
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
}
}