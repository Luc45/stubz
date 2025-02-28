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
    protected $provides = array(\Automattic\WooCommerce\Internal\Admin\Orders\COTRedirectionController::class, \Automattic\WooCommerce\Internal\Admin\Orders\PageController::class, \Automattic\WooCommerce\Internal\Admin\Orders\Edit::class, \Automattic\WooCommerce\Internal\Admin\Orders\ListTable::class, \Automattic\WooCommerce\Internal\Admin\Orders\EditLock::class, \Automattic\WooCommerce\Internal\Admin\Orders\MetaBoxes\TaxonomiesMetaBox::class);
    /**
     * Registers services provided by this class.
     *
     * @return void
     */
    public function register()
    {
    }
}