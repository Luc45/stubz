<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * OrderAdminServiceProvider class.
 */
class OrderAdminServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * List services provided by this class.
     *
     * @var string[]
     */
    protected $provides = array(
'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\COTRedirectionController',
'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\PageController',
'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\Edit',
'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\ListTable',
'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\EditLock',
'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\MetaBoxes\\TaxonomiesMetaBox'
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