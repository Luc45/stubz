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
    protected $provides = array(\Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Register::class, \Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Synchronize::class, \Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Admin\SyncUI::class, \Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Admin\UI::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}
