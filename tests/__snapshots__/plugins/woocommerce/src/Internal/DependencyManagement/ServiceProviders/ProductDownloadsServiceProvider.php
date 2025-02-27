<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the Product Downloads-related services.
 */
class ProductDownloadsServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\ProductDownloads\\ApprovedDirectories\\Register',
  1 => 'Automattic\\WooCommerce\\Internal\\ProductDownloads\\ApprovedDirectories\\Synchronize',
  2 => 'Automattic\\WooCommerce\\Internal\\ProductDownloads\\ApprovedDirectories\\Admin\\SyncUI',
  3 => 'Automattic\\WooCommerce\\Internal\\ProductDownloads\\ApprovedDirectories\\Admin\\UI',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}