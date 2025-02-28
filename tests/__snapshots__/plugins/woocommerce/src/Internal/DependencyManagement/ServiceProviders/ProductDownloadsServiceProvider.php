<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the Product Downloads-related services.
 */
class ProductDownloadsServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(
'Automattic\\WooCommerce\\Internal\\ProductDownloads\\ApprovedDirectories\\Register',
'Automattic\\WooCommerce\\Internal\\ProductDownloads\\ApprovedDirectories\\Synchronize',
'Automattic\\WooCommerce\\Internal\\ProductDownloads\\ApprovedDirectories\\Admin\\SyncUI',
'Automattic\\WooCommerce\\Internal\\ProductDownloads\\ApprovedDirectories\\Admin\\UI'
);
    /**
     * Register the classes.
     */
    public function register()
{
}
}