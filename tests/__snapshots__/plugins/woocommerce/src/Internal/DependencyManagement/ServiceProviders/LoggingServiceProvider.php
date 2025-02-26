<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * LoggingServiceProvider class.
 */
class LoggingServiceProvider
{
    /**
     * List services provided by this class.
     *
     * @var string[]
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\Logging\\FileV2\\FileController',
  1 => 'Automattic\\WooCommerce\\Internal\\Admin\\Logging\\PageController',
  2 => 'Automattic\\WooCommerce\\Internal\\Admin\\Logging\\Settings',
  3 => 'Automattic\\WooCommerce\\Internal\\Logging\\RemoteLogger',
);

    /**
     * Registers services provided by this class.
     *
     * @return void
     */
    public function register()
    {
        // stub
    }

}

