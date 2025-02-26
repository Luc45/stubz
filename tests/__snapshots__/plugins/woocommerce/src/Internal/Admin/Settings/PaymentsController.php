<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings;

/**
 * Payments settings controller class.
 *
 * Use this class for hooks and actions related to the Payments settings page.
 */
class PaymentsController
{
    /**
     * The payment service.
     *
     * @var Payments
     */
    private Automattic\WooCommerce\Internal\Admin\Settings\Payments $payments;

    /**
     * Register hooks.
     */
    public function register()
    {
        // stub
    }

    /**
     * Filter the feature flags list to modify the new Payments Settings page feature based on the experiment.
     *
     * @param array $features The feature flags list.
     *
     * @return array The updated feature flags list.
     */
    public function filter_feature_config_experiment($features)
    {
        // stub
    }

    /**
     * Delayed hook registration.
     */
    public function delayed_register()
    {
        // stub
    }

    /**
     * Initialize the class instance.
     *
     * @param Payments $payments The payments service.
     *
     * @internal
     */
    public final function init(Automattic\WooCommerce\Internal\Admin\Settings\Payments $payments): void
    {
        // stub
    }

    /**
     * Adds the Payments top-level menu item.
     */
    public function add_menu()
    {
        // stub
    }

    /**
     * Preload settings to make them available to the Payments settings page frontend logic.
     *
     * Added keys will be available in the window.wcSettings.admin object.
     *
     * @param array $settings The settings array.
     *
     * @return array Settings array with additional settings added.
     */
    public function preload_settings(array $settings): array
    {
        // stub
    }

    /**
     * Adds promo note IDs to the list of allowed ones.
     *
     * @param array $promo_notes Allowed promo note IDs.
     *
     * @return array The updated list of allowed promo note IDs.
     */
    public function add_allowed_promo_notes(array $promo_notes = array (
)): array
    {
        // stub
    }

    /**
     * Check if the store has any enabled gateways (including offline payment methods).
     *
     * @return bool True if the store has any enabled gateways, false otherwise.
     */
    private function store_has_enabled_gateways(): bool
    {
        // stub
    }

    /**
     * Check if the store has any payment providers that have an active incentive.
     *
     * @return bool True if the store has providers with an active incentive.
     */
    private function store_has_providers_with_incentive(): bool
    {
        // stub
    }

    /**
     * Check if the WooPayments plugin is active.
     *
     * @return boolean
     */
    private function is_woopayments_active(): bool
    {
        // stub
    }

}

