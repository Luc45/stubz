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
'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\DataSynchronizer',
'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\CustomOrdersTableController',
'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\OrdersTableDataStore',
'Automattic\\WooCommerce\\Database\\Migrations\\CustomOrderTable\\CLIRunner',
'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\OrdersTableDataStoreMeta',
'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\OrdersTableRefundDataStore',
'Automattic\\WooCommerce\\Caches\\OrderCache',
'Automattic\\WooCommerce\\Caches\\OrderCacheController',
'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\LegacyDataHandler',
'Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\LegacyDataCleanup'
);
    /**
     * Register the classes.
     */
    public function register()
{
}
}