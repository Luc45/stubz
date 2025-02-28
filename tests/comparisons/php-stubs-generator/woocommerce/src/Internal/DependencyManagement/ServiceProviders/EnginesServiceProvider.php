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
    protected $provides = array(\Automattic\WooCommerce\Internal\TransientFiles\TransientFilesEngine::class, \Automattic\WooCommerce\Internal\ReceiptRendering\ReceiptRenderingEngine::class, \Automattic\WooCommerce\Internal\ReceiptRendering\ReceiptRenderingRestController::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}