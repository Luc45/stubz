<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the engine classes in the Automattic\WooCommerce\src namespace.
 */
class EnginesServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders\AbstractInterfaceServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(
  0 => 'Automattic\\WooCommerce\\Internal\\TransientFiles\\TransientFilesEngine',
  1 => 'Automattic\\WooCommerce\\Internal\\ReceiptRendering\\ReceiptRenderingEngine',
  2 => 'Automattic\\WooCommerce\\Internal\\ReceiptRendering\\ReceiptRenderingRestController',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}

