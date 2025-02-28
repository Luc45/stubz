<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the suggestions controller classes in the Automattic\WooCommerce\Internal\Admin\Suggestions namespace.
 */
class AdminSuggestionsServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * List services provided by this class.
     *
     * @var string[]
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\Admin\Suggestions\PaymentExtensionSuggestions::class, \Automattic\WooCommerce\Internal\Admin\Suggestions\PaymentExtensionSuggestionIncentives::class);
    /**
     * Registers services provided by this class.
     *
     * @return void
     */
    public function register()
    {
    }
}