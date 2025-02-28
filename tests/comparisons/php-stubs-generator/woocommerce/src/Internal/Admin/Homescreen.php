<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Contains backend logic for the homescreen feature.
 */
class Homescreen
{
    /**
     * Menu slug.
     */
    const MENU_SLUG = 'wc-admin';
    /**
     * Class instance.
     *
     * @var Homescreen instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Set free shipping in the same country as the store default
     * Flag rate in all other countries when any of the following conditions are true
     *
     * - The store sells physical products, has JP and WCS installed and connected, and is located in the US.
     * - The store sells physical products, and is not located in US/Canada/Australia/UK (irrelevant if JP is installed or not).
     * - The store sells physical products and is located in US, but JP and WCS are not installed.
     *
     * @param array $settings shared admin settings.
     * @return array
     */
    public function maybe_set_default_shipping_options_on_home($settings)
    {
    }
    /**
     * Adds fields so that we can store performance indicators, row settings, and chart type settings for users.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
    {
    }
    /**
     * Registers home page.
     */
    public function register_page()
    {
    }
    /**
     * Check if the user can access the top-level WooCommerce item.
     *
     * @return bool
     */
    public static function is_admin_user()
    {
    }
    /**
     * Possibly remove the WooCommerce menu item if it was purely used to access wc-admin pages.
     */
    public function possibly_remove_woocommerce_menu()
    {
    }
    /**
     * Update the WooCommerce menu structure to make our main dashboard/handler
     * the top level link for 'WooCommerce'.
     */
    public function update_link_structure()
    {
    }
    /**
     * Preload options to prime state of the application.
     *
     * @param array $options Array of options to preload.
     * @return array
     */
    public function preload_options($options)
    {
    }
}