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
    protected $provides = array(
'Automattic\\WooCommerce\\Internal\\Utilities\\DatabaseUtil',
'Automattic\\WooCommerce\\Internal\\Utilities\\HtmlSanitizer',
'Automattic\\WooCommerce\\Utilities\\OrderUtil',
'Automattic\\WooCommerce\\Utilities\\PluginUtil',
'Automattic\\WooCommerce\\Internal\\Utilities\\COTMigrationUtil',
'Automattic\\WooCommerce\\Internal\\Utilities\\WebhookUtil',
'Automattic\\WooCommerce\\Utilities\\RestApiUtil',
'Automattic\\WooCommerce\\Utilities\\TimeUtil',
'Automattic\\WooCommerce\\Internal\\Utilities\\PluginInstaller',
'Automattic\\WooCommerce\\Internal\\Utilities\\LegacyRestApiStub'
);
    /**
     * Register the classes.
     */
    public function register()
{
}
}