<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the EmailPreview namespace.
 */
class EmailPreviewServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\EmailPreview\\EmailPreview',
  1 => 'Automattic\\WooCommerce\\Internal\\Admin\\EmailPreview\\EmailPreviewRestController',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}

