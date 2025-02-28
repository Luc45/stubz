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
    protected $provides = array(
'Automattic\\WooCommerce\\Internal\\Admin\\Settings\\PaymentsRestController',
'Automattic\\WooCommerce\\Internal\\Admin\\Settings\\Payments',
'Automattic\\WooCommerce\\Internal\\Admin\\Settings\\PaymentsController',
'Automattic\\WooCommerce\\Internal\\Admin\\Settings\\PaymentProviders'
);
    /**
     * Registers services provided by this class.
     */
    public function register()
{
}
}