<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for layout templates.
 */
class LayoutTemplatesServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(
'Automattic\\WooCommerce\\LayoutTemplates\\LayoutTemplateRegistry'
);
    /**
     * Register the classes.
     */
    public function register()
{
}
}