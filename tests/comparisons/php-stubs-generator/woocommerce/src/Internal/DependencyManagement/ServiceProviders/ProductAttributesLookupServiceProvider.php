<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the ProductAttributesLookupServiceProvider namespace.
 */
class ProductAttributesLookupServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\ProductAttributesLookup\DataRegenerator::class, \Automattic\WooCommerce\Internal\ProductAttributesLookup\Filterer::class, \Automattic\WooCommerce\Internal\ProductAttributesLookup\LookupDataStore::class, \Automattic\WooCommerce\Internal\ProductAttributesLookup\CLIRunner::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}
