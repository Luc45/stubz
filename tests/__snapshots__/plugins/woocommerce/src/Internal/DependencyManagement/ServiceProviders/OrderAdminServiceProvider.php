<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * OrderAdminServiceProvider class.
 */
class OrderAdminServiceProvider
{
    /**
     * List services provided by this class.
     *
     * @var string[]
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\COTRedirectionController',
  1 => 'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\PageController',
  2 => 'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\Edit',
  3 => 'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\ListTable',
  4 => 'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\EditLock',
  5 => 'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\MetaBoxes\\TaxonomiesMetaBox',
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