<?php

namespace ;

/**
 * WC_Admin_Setup_Wizard class.
 */
class WC_Admin_Setup_Wizard extends \
{
    /**
     * Current step
     *
     * @var string
     */
    private $step = '';

    /**
     * Steps for the setup wizard
     *
     * @var array
     */
    private $steps = array(
);

    /**
     * Actions to be executed after the HTTP response has completed
     *
     * @var array
     */
    private $deferred_actions = array(
);

    /**
     * Tweets user can optionally send after install
     *
     * @var array
     */
    private $tweets = array(
  0 => 'Someone give me woo-t, I just set up a new store with #WordPress and @WooCommerce!',
  1 => 'Someone give me high five, I just set up a new store with #WordPress and @WooCommerce!',
);

    /**
     * The version of WordPress required to run the WooCommerce Admin plugin
     *
     * @var string
     */
    private $wc_admin_plugin_minimum_wordpress_version = '5.3';

    /**
     * Hook in tabs.
     *
     * @deprecated 4.6.0
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Add admin menus/screens.
     *
     * @deprecated 4.6.0
     */
    public function admin_menus()
    {
        // stub
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
        // stub
    }

    /**
     * The "automated tax" extra should only be shown if the current user can
     * install plugins and the store is in a supported country.
     *
     * @deprecated 4.6.0
     */
    protected function should_show_automated_tax()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Should we show the new WooCommerce Admin onboarding experience?
     *
     * @deprecated 4.6.0
     * @return boolean
     */
    protected function should_show_wc_admin_onboarding()
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Show the setup wizard.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard()
    {
        // stub
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
        // stub
    }

    /**
     * Setup Wizard Header.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard_header()
    {
        // stub
    }

    /**
     * Setup Wizard Footer.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard_footer()
    {
        // stub
    }

    /**
     * Output the steps.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard_steps()
    {
        // stub
    }

    /**
     * Output the content for the current step.
     *
     * @deprecated 4.6.0
     */
    public function setup_wizard_content()
    {
        // stub
    }

    /**
     * Display's a prompt for users to try out the new improved WooCommerce onboarding experience in WooCommerce Admin.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_new_onboarding()
    {
        // stub
    }

    /**
     * Installs WooCommerce admin and redirects to the new onboarding experience.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_new_onboarding_save()
    {
        // stub
    }

    /**
     * Initial "store setup" step.
     * Location, product type, page setup, and tracking opt-in.
     */
    public function wc_setup_store_setup()
    {
        // stub
    }

    /**
     * Template for the usage tracking modal.
     *
     * @deprecated 4.6.0
     */
    public function tracking_modal()
    {
        // stub
    }

    /**
     * Save initial store settings.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_store_setup_save()
    {
        // stub
    }

    /**
     * Finishes replying to the client, but keeps the process running for further (async) code execution.
     *
     * @see https://core.trac.wordpress.org/ticket/41358 .
     */
    protected function close_http_connection()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Helper method to install Jetpack.
     *
     * @deprecated 4.6.0
     */
    protected function install_jetpack()
    {
        // stub
    }

    /**
     * Helper method to install WooCommerce Services and its Jetpack dependency.
     *
     * @deprecated 4.6.0
     */
    protected function install_woocommerce_services()
    {
        // stub
    }

    /**
     * Retrieve info for missing WooCommerce Services and/or Jetpack plugin.
     *
     * @deprecated 4.6.0
     * @return array
     */
    protected function get_wcs_requisite_plugins()
    {
        // stub
    }

    /**
     * Plugin install info message markup with heading.
     *
     * @deprecated 4.6.0
     */
    public function plugin_install_info()
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Render a product weight unit dropdown.
     *
     * @deprecated 4.6.0
     * @return string
     */
    protected function get_product_weight_selection()
    {
        // stub
    }

    /**
     * Render a product dimension unit dropdown.
     *
     * @deprecated 4.6.0
     * @return string
     */
    protected function get_product_dimension_selection()
    {
        // stub
    }

    /**
     * Shipping.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_shipping()
    {
        // stub
    }

    /**
     * Save shipping options.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_shipping_save()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Helper method to retrieve the current user's email address.
     *
     * @deprecated 4.6.0
     * @return string Email address
     */
    protected function get_current_user_email()
    {
        // stub
    }

    /**
     * Array of all possible "in cart" gateways that can be offered.
     *
     * @deprecated 4.6.0
     * @return array
     */
    protected function get_wizard_available_in_cart_payment_gateways()
    {
        // stub
    }

    /**
     * Simple array of "in cart" gateways to show in wizard.
     *
     * @deprecated 4.6.0
     * @return array
     */
    public function get_wizard_in_cart_payment_gateways()
    {
        // stub
    }

    /**
     * Simple array of "manual" gateways to show in wizard.
     *
     * @deprecated 4.6.0
     * @return array
     */
    public function get_wizard_manual_payment_gateways()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Payment Step.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_payment()
    {
        // stub
    }

    /**
     * Payment Step save.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_payment_save()
    {
        // stub
    }

    protected function display_recommended_item($item_info)
    {
        // stub
    }

    /**
     * Recommended step
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_recommended()
    {
        // stub
    }

    /**
     * Recommended step save.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_recommended_save()
    {
        // stub
    }

    /**
     * Go to the next step if Jetpack was connected.
     */
    protected function wc_setup_activate_actions()
    {
        // stub
    }

    /**
     *
     * @deprecated 4.6.0
     */
    protected function wc_setup_activate_get_feature_list()
    {
        // stub
    }

    /**
     *
     * @deprecated 4.6.0
     */
    protected function wc_setup_activate_get_feature_list_str()
    {
        // stub
    }

    /**
     * Activate step.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_activate()
    {
        // stub
    }

    /**
     *
     * @deprecated 4.6.0
     */
    protected function get_all_activate_errors()
    {
        // stub
    }

    /**
     *
     * @deprecated 4.6.0
     */
    protected function get_activate_error_message($code = '')
    {
        // stub
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
        // stub
    }

    /**
     * Final step.
     *
     * @deprecated 4.6.0
     */
    public function wc_setup_ready()
    {
        // stub
    }

}

