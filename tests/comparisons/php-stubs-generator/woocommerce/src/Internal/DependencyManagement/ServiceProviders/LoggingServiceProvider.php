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
    protected $provides = array(\Automattic\WooCommerce\Internal\Admin\Logging\FileV2\FileController::class, \Automattic\WooCommerce\Internal\Admin\Logging\PageController::class, \Automattic\WooCommerce\Internal\Admin\Logging\Settings::class, \Automattic\WooCommerce\Internal\Logging\RemoteLogger::class);
    /**
     * Registers services provided by this class.
     *
     * @return void
     */
    public function register()
    {
    }
}