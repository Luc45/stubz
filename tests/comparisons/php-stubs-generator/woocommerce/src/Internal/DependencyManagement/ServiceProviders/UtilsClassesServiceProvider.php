<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the non-static utils classes in the Automattic\WooCommerce\src namespace.
 */
class UtilsClassesServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders\AbstractInterfaceServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\Utilities\DatabaseUtil::class, \Automattic\WooCommerce\Internal\Utilities\HtmlSanitizer::class, \Automattic\WooCommerce\Utilities\OrderUtil::class, \Automattic\WooCommerce\Utilities\PluginUtil::class, \Automattic\WooCommerce\Internal\Utilities\COTMigrationUtil::class, \Automattic\WooCommerce\Internal\Utilities\WebhookUtil::class, \Automattic\WooCommerce\Utilities\RestApiUtil::class, \Automattic\WooCommerce\Utilities\TimeUtil::class, \Automattic\WooCommerce\Internal\Utilities\PluginInstaller::class, \Automattic\WooCommerce\Internal\Utilities\LegacyRestApiStub::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}
