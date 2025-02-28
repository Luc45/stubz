<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the admin settings controller classes in the Automattic\WooCommerce\Internal\Admin\Settings namespace.
 */
class AdminSettingsServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders\AbstractInterfaceServiceProvider
{
    /**
     * List services provided by this class.
     *
     * @var string[]
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\Admin\Settings\PaymentsRestController::class, \Automattic\WooCommerce\Internal\Admin\Settings\Payments::class, \Automattic\WooCommerce\Internal\Admin\Settings\PaymentsController::class, \Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders::class);
    /**
     * Registers services provided by this class.
     */
    public function register()
    {
    }
}