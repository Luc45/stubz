<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the DownloadPermissionsAdjuster class.
 */
class DownloadPermissionsAdjusterServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\DownloadPermissionsAdjuster',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}