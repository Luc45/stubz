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
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\ProductAttributesLookup\\DataRegenerator',
  1 => 'Automattic\\WooCommerce\\Internal\\ProductAttributesLookup\\Filterer',
  2 => 'Automattic\\WooCommerce\\Internal\\ProductAttributesLookup\\LookupDataStore',
  3 => 'Automattic\\WooCommerce\\Internal\\ProductAttributesLookup\\CLIRunner',
);

    /**
     * Register the classes.
     */
    public function register()
{
}
}