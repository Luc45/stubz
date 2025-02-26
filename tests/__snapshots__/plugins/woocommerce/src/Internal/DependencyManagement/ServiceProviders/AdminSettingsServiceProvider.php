<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the admin settings controller classes in the Automattic\WooCommerce\Internal\Admin\Settings namespace.
 */
class AdminSettingsServiceProvider
{
    /**
     * List services provided by this class.
     *
     * @var string[]
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\Settings\\PaymentsRestController',
  1 => 'Automattic\\WooCommerce\\Internal\\Admin\\Settings\\Payments',
  2 => 'Automattic\\WooCommerce\\Internal\\Admin\\Settings\\PaymentsController',
  3 => 'Automattic\\WooCommerce\\Internal\\Admin\\Settings\\PaymentProviders',
);

    /**
     * Registers services provided by this class.
     */
    public function register()
    {
        // stub
    }

}

