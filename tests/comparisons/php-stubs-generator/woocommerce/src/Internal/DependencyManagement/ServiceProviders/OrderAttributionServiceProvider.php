<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Class OrderAttributionServiceProvider
 *
 * @since 8.5.0
 */
class OrderAttributionServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders\AbstractInterfaceServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\Orders\OrderAttributionController::class, \Automattic\WooCommerce\Internal\Orders\OrderAttributionBlocksController::class, \Automattic\WooCommerce\Internal\Integrations\WPConsentAPI::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}