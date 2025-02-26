<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the classes in the Internal\DataStores\Orders namespace.
 */
class OrdersDataStoreServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(
  0 => 'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\DataSynchronizer',
  1 => 'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\CustomOrdersTableController',
  2 => 'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\OrdersTableDataStore',
  3 => 'Automattic\\WooCommerce\\Database\\Migrations\\CustomOrderTable\\CLIRunner',
  4 => 'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\OrdersTableDataStoreMeta',
  5 => 'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\OrdersTableRefundDataStore',
  6 => 'Automattic\\WooCommerce\\Caches\\OrderCache',
  7 => 'Automattic\\WooCommerce\\Caches\\OrderCacheController',
  8 => 'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\LegacyDataHandler',
  9 => 'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\LegacyDataCleanup',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}

