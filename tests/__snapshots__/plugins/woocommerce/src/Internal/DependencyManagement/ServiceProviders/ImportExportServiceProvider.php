<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the import/export classes.
 *
 * @since 9.3.0
 */
class ImportExportServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\ImportExport\\CSVUploadHelper',
);
    /**
     * Register the classes.
     */
    public function register()
{
}
}