<?php

/**
 * WC_Admin_Setup_Wizard class.
 */
class WC_Admin_Setup_Wizard
{
    /**
     * Hook in tabs.
     *
     * @deprecated 4.6.0
     */
    public function __construct()
    {
    }
    /**
     * Add admin menus/screens.
     *
     * @deprecated 4.6.0
     */
    public function admin_menus()
    {
    }
    /**
     * The theme "extra" should only be shown if the current user can modify themes
     * and the store doesn't already have a WooCommerce theme.
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    protected function should_show_theme()
    {
    }
    /**
     * The "automated tax" extra should only be shown if the current user can
     * install plugins and the store is in a supported country.
     *
     * @deprecated 4.6.0
     */
    protected function should_show_automated_tax()
    {
    }
    /**
     * Should we show the MailChimp install option?
     * True only if the user can install plugins.
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    protected function should_show_mailchimp()
    {
    }
    /**
     * Should we show the Facebook install option?
     * True only if the user can install plugins,
     * and up until the end date of the recommendation.
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    protected function should_show_facebook()
    {
    }
    /**
     * Is the WooCommerce Admin actively included in the WooCommerce core?
     * Based on presence of a basic WC Admin function.
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    protected function is_wc_admin_active()
    {
    }
    /**
     * Should we show the WooCommerce Admin install option?
     * True only if the user can install plugins,
     * and is running the correct version of WordPress.
     *
     * @see WC_Admin_Setup_Wizard::$wc_admin_plugin_minimum_wordpress_version
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    protected function should_show_wc_admin()
    {
    }
    /**
     * Should we show the new WooCommerce Admin onboarding experience?
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    protected function should_show_wc_admin_onboarding()
    {
    }
    /**
     * Should we display the 'Recommended' step?
     * True if at least one of the recommendations will be displayed.
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    protected function should_show_recommended_step()
    {
    }
    /**
     * Register/enqueue scripts and styles for the Setup Wizard.
     *
     * Hooked onto 'admin_enqueue_scripts'.
     *
     * @deprecated 4.6.0
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Show the setup wizard.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard()
    {
    }
    /**
     * Get the URL for the next step's screen.
     *
     * @param string $step  slug (default: current step).
     * @return string       URL for next step if a next step exists.
     *                      Admin URL if it's the last step.
     *                      Empty string on failure.
     *
     * @deprecated 4.6.0
     * @since 3.0.0
     */
    public function get_next_step_link($step = '')
    {
    }
    /**
     * Setup Wizard Header.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard_header()
    {
    }
    /**
     * Setup Wizard Footer.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard_footer()
    {
    }
    /**
     * Output the steps.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard_steps()
    {
    }
    /**
     * Output the content for the current step.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard_content()
    {
    }
    /**
     * Display's a prompt for users to try out the new improved WooCommerce onboarding experience in WooCommerce Admin.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_new_onboarding()
    {
    }
    /**
     * Installs WooCommerce admin and redirects to the new onboarding experience.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_new_onboarding_save()
    {
    }
    /**
     * Initial "store setup" step.
     * Location, product type, page setup, and tracking opt-in.
     */
    public function wc_setup_store_setup()
    {
    }
    /**
     * Template for the usage tracking modal.
     *
     * @deprecated 4.6.0
     */
    public function tracking_modal()
    {
    }
    /**
     * Save initial store settings.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_store_setup_save()
    {
    }
    /**
     * Finishes replying to the client, but keeps the process running for further (async) code execution.
     *
     * @see https://core.trac.wordpress.org/ticket/41358 .
     */
    protected function close_http_connection()
    {
    }
    /**
     * Function called after the HTTP request is finished, so it's executed without the client having to wait for it.
     *
     * @see WC_Admin_Setup_Wizard::install_plugin
     * @see WC_Admin_Setup_Wizard::install_theme
     *
     * @deprecated 4.6.0
     */
    public function run_deferred_actions()
    {
    }
    /**
     * Helper method to queue the background install of a plugin.
     *
     * @param string $plugin_id  Plugin id used for background install.
     * @param array  $plugin_info Plugin info array containing name and repo-slug, and optionally file if different from [repo-slug].php.
     *
     * @deprecated 4.6.0
     */
    protected function install_plugin($plugin_id, $plugin_info)
    {
    }
    /**
     * Helper method to queue the background install of a theme.
     *
     * @param string $theme_id  Theme id used for background install.
     *
     * @deprecated 4.6.0
     */
    protected function install_theme($theme_id)
    {
    }
    /**
     * Helper method to install Jetpack.
     *
     * @deprecated 4.6.0
     */
    protected function install_jetpack()
    {
    }
    /**
     * Helper method to install WooCommerce Services and its Jetpack dependency.
     *
     * @deprecated 4.6.0
     */
    protected function install_woocommerce_services()
    {
    }
    /**
     * Retrieve info for missing WooCommerce Services and/or Jetpack plugin.
     *
     * @deprecated 4.6.0
     * @return array
     */
    protected function get_wcs_requisite_plugins()
    {
    }
    /**
     * Plugin install info message markup with heading.
     *
     * @deprecated 4.6.0
     */
    public function plugin_install_info()
    {
    }
    /**
     * Get shipping methods based on country code.
     *
     * @param string $country_code Country code.
     * @param string $currency_code Currency code.
     *
     * @deprecated 4.6.0
     * @return array
     */
    protected function get_wizard_shipping_methods($country_code, $currency_code)
    {
    }
    /**
     * Render the available shipping methods for a given country code.
     *
     * @param string $country_code Country code.
     * @param string $currency_code Currency code.
     * @param string $input_prefix Input prefix.
     *
     * @deprecated 4.6.0
     */
    protected function shipping_method_selection_form($country_code, $currency_code, $input_prefix)
    {
    }
    /**
     * Render a product weight unit dropdown.
     *
     * @deprecated 4.6.0
     * @return string
     */
    protected function get_product_weight_selection()
    {
    }
    /**
     * Render a product dimension unit dropdown.
     *
     * @deprecated 4.6.0
     * @return string
     */
    protected function get_product_dimension_selection()
    {
    }
    /**
     * Shipping.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_shipping()
    {
    }
    /**
     * Save shipping options.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_shipping_save()
    {
    }
    /**
     * Is Stripe country supported
     * https://stripe.com/global .
     *
     * @param string $country_code Country code.
     *
     * @deprecated 4.6.0
     */
    protected function is_stripe_supported_country($country_code)
    {
    }
    /**
     * Is PayPal currency supported.
     *
     * @param string $currency Currency code.
     * @return boolean
     *
     * @deprecated 4.6.0
     */
    protected function is_paypal_supported_currency($currency)
    {
    }
    /**
     * Is Klarna Checkout country supported.
     *
     * @param string $country_code Country code.
     *
     * @deprecated 4.6.0
     */
    protected function is_klarna_checkout_supported_country($country_code)
    {
    }
    /**
     * Is Klarna Payments country supported.
     *
     * @param string $country_code Country code.
     *
     * @deprecated 4.6.0
     */
    protected function is_klarna_payments_supported_country($country_code)
    {
    }
    /**
     * Is Square country supported
     *
     * @param string $country_code Country code.
     *
     * @deprecated 4.6.0
     */
    protected function is_square_supported_country($country_code)
    {
    }
    /**
     * Is eWAY Payments country supported
     *
     * @param string $country_code Country code.
     *
     * @deprecated 4.6.0
     */
    protected function is_eway_payments_supported_country($country_code)
    {
    }
    /**
     * Is ShipStation country supported
     *
     * @param string $country_code Country code.
     *
     * @deprecated 4.6.0
     */
    protected function is_shipstation_supported_country($country_code)
    {
    }
    /**
     * Is WooCommerce Services shipping label country supported
     *
     * @param string $country_code Country code.
     *
     * @deprecated 4.6.0
     */
    protected function is_wcs_shipping_labels_supported_country($country_code)
    {
    }
    /**
     * Helper method to retrieve the current user's email address.
     *
     * @deprecated 4.6.0
     * @return string Email address
     */
    protected function get_current_user_email()
    {
    }
    /**
     * Array of all possible "in cart" gateways that can be offered.
     *
     * @deprecated 4.6.0
     * @return array
     */
    protected function get_wizard_available_in_cart_payment_gateways()
    {
    }
    /**
     * Simple array of "in cart" gateways to show in wizard.
     *
     * @deprecated 4.6.0
     * @return array
     */
    public function get_wizard_in_cart_payment_gateways()
    {
    }
    /**
     * Simple array of "manual" gateways to show in wizard.
     *
     * @deprecated 4.6.0
     * @return array
     */
    public function get_wizard_manual_payment_gateways()
    {
    }
    /**
     * Display service item in list.
     *
     * @param int   $item_id Item ID.
     * @param array $item_info Item info array.
     *
     * @deprecated 4.6.0
     */
    public function display_service_item($item_id, $item_info)
    {
    }
    /**
     * Is it a featured service?
     *
     * @param array $service Service info array.
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    public function is_featured_service($service)
    {
    }
    /**
     * Is this a non featured service?
     *
     * @param array $service Service info array.
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    public function is_not_featured_service($service)
    {
    }
    /**
     * Payment Step.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_payment()
    {
    }
    /**
     * Payment Step save.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_payment_save()
    {
    }
    protected function display_recommended_item($item_info)
    {
    }
    /**
     * Recommended step
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_recommended()
    {
    }
    /**
     * Recommended step save.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_recommended_save()
    {
    }
    /**
     * Go to the next step if Jetpack was connected.
     */
    protected function wc_setup_activate_actions()
    {
    }
    /**
     *
     * @deprecated 4.6.0
     */
    protected function wc_setup_activate_get_feature_list()
    {
    }
    /**
     *
     * @deprecated 4.6.0
     */
    protected function wc_setup_activate_get_feature_list_str()
    {
    }
    /**
     * Activate step.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_activate()
    {
    }
    /**
     *
     * @deprecated 4.6.0
     */
    protected function get_all_activate_errors()
    {
    }
    /**
     *
     * @deprecated 4.6.0
     */
    protected function get_activate_error_message($code = '')
    {
    }
    /**
     * Activate step save.
     *
     * Install, activate, and launch connection flow for Jetpack.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_activate_save()
    {
    }
    /**
     * Final step.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_ready()
    {
    }
}
