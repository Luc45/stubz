<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the suggestions controller classes in the Automattic\WooCommerce\Internal\Admin\Suggestions namespace.
 */
class AdminSuggestionsServiceProvider
{
    /**
     * List services provided by this class.
     *
     * @var string[]
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\Suggestions\\PaymentExtensionSuggestions',
  1 => 'Automattic\\WooCommerce\\Internal\\Admin\\Suggestions\\PaymentExtensionSuggestionIncentives',
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