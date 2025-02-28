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
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Utilities\\DatabaseUtil',
  1 => 'Automattic\\WooCommerce\\Internal\\Utilities\\HtmlSanitizer',
  2 => 'Automattic\\WooCommerce\\Utilities\\OrderUtil',
  3 => 'Automattic\\WooCommerce\\Utilities\\PluginUtil',
  4 => 'Automattic\\WooCommerce\\Internal\\Utilities\\COTMigrationUtil',
  5 => 'Automattic\\WooCommerce\\Internal\\Utilities\\WebhookUtil',
  6 => 'Automattic\\WooCommerce\\Utilities\\RestApiUtil',
  7 => 'Automattic\\WooCommerce\\Utilities\\TimeUtil',
  8 => 'Automattic\\WooCommerce\\Internal\\Utilities\\PluginInstaller',
  9 => 'Automattic\\WooCommerce\\Internal\\Utilities\\LegacyRestApiStub',
);

    /**
     * Register the classes.
     */
    public function register()
{
}
}