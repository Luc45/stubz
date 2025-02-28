<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * OrderMetaBoxServiceProvider class.
 */
class OrderMetaBoxServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\Admin\Orders\MetaBoxes\CustomerHistory::class, \Automattic\WooCommerce\Internal\Admin\Orders\MetaBoxes\CustomMetaBox::class, \Automattic\WooCommerce\Internal\Admin\Orders\MetaBoxes\OrderAttribution::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}