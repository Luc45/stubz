<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the EmailPreview namespace.
 */
class EmailPreviewServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders\AbstractInterfaceServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\Admin\EmailPreview\EmailPreview::class, \Automattic\WooCommerce\Internal\Admin\EmailPreview\EmailPreviewRestController::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}