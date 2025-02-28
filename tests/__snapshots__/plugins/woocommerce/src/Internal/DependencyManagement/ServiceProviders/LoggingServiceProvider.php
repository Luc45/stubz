<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * LoggingServiceProvider class.
 */
class LoggingServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * List services provided by this class.
     *
     * @var string[]
     */
    protected $provides = array(
'Automattic\\WooCommerce\\Internal\\Admin\\Logging\\FileV2\\FileController',
'Automattic\\WooCommerce\\Internal\\Admin\\Logging\\PageController',
'Automattic\\WooCommerce\\Internal\\Admin\\Logging\\Settings',
'Automattic\\WooCommerce\\Internal\\Logging\\RemoteLogger'
);
    /**
     * Registers services provided by this class.
     *
     * @return void
     */
    public function register()
{
}
}