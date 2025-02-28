<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the OptionSanitizer class.
 */
class OptionSanitizerServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\Settings\OptionSanitizer::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}