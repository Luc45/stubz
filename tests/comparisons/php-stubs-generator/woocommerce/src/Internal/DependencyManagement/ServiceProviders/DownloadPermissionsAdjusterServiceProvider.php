<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the DownloadPermissionsAdjuster class.
 */
class DownloadPermissionsAdjusterServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\DownloadPermissionsAdjuster::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}
