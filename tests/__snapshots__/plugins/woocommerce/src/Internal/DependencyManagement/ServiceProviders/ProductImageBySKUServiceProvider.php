<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the ProductImageBySKUServiceProvider namespace.
 */
class ProductImageBySKUServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\ProductImage\\MatchImageBySKU',
);

    /**
     * Register the classes.
     */
    public function register()
{
}
}