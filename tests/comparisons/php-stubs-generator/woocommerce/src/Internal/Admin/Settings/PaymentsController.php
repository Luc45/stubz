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
     * Register hooks.
     */
    public function register()
    {
    }
    /**
     * Delayed hook registration.
     */
    public function delayed_register()
    {
    }
    /**
     * Initialize the class instance.
     *
     * @param Payments $payments The payments service.
     *
     * @internal
     */
    final public function init(\Automattic\WooCommerce\Internal\Admin\Settings\Payments $payments): void
    {
    }
    /**
     * Adds the Payments top-level menu item.
     */
    public function add_menu()
    {
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
    }
    /**
     * Adds promo note IDs to the list of allowed ones.
     *
     * @param array $promo_notes Allowed promo note IDs.
     *
     * @return array The updated list of allowed promo note IDs.
     */
    public function add_allowed_promo_notes(array $promo_notes = array()): array
    {
    }
}
