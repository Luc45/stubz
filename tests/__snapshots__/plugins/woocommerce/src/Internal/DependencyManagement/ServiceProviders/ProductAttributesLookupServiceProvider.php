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
    protected $provides = array(
'Automattic\\WooCommerce\\Internal\\ProductAttributesLookup\\DataRegenerator',
'Automattic\\WooCommerce\\Internal\\ProductAttributesLookup\\Filterer',
'Automattic\\WooCommerce\\Internal\\ProductAttributesLookup\\LookupDataStore',
'Automattic\\WooCommerce\\Internal\\ProductAttributesLookup\\CLIRunner'
);
    /**
     * Register the classes.
     */
    public function register()
{
}
}