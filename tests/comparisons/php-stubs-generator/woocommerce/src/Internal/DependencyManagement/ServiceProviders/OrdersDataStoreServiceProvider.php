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
    protected $provides = array(\Automattic\WooCommerce\Internal\DataStores\Orders\DataSynchronizer::class, \Automattic\WooCommerce\Internal\DataStores\Orders\CustomOrdersTableController::class, \Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableDataStore::class, \Automattic\WooCommerce\Database\Migrations\CustomOrderTable\CLIRunner::class, \Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableDataStoreMeta::class, \Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableRefundDataStore::class, \Automattic\WooCommerce\Caches\OrderCache::class, \Automattic\WooCommerce\Caches\OrderCacheController::class, \Automattic\WooCommerce\Internal\DataStores\Orders\LegacyDataHandler::class, \Automattic\WooCommerce\Internal\DataStores\Orders\LegacyDataCleanup::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}