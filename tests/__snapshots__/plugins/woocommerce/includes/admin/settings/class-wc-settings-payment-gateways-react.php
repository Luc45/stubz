<?php

namespace ;

/**
 * WC_Settings_Payment_Gateways_React.
 */
class WC_Settings_Payment_Gateways_React extends \WC_Settings_Page
{
    /**
     * Get the whitelist of sections to render using React.
     *
     * @return array List of section identifiers.
     */
    private function get_reactify_render_sections()
    {
        // stub
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Output the settings.
     */
    public function output()
    {
        // stub
    }

    /**
     * Check if the given section should be rendered using React.
     *
     * @param string $section The section to check.
     * @return bool Whether the section should be rendered using React.
     */
    private function should_render_react_section($section)
    {
        // stub
    }

    /**
     * Render the React section.
     *
     * @param string $section The section to render.
     */
    private function render_react_section(string $section)
    {
        // stub
    }

    /**
     * Render the classic gateway settings page.
     *
     * @param array  $payment_gateways The payment gateways.
     * @param string $current_section The current section.
     */
    private function render_classic_gateway_settings_page($payment_gateways, $current_section)
    {
        // stub
    }

    /**
     * Run the 'admin_options' method on a given gateway.
     * This method exists to help with unit testing.
     *
     * @param object $gateway The gateway object to run the method on.
     */
    protected function run_gateway_admin_options($gateway)
    {
        // stub
    }

    /**
     * Don't show any section links.
     *
     * @return array
     */
    public function get_sections()
    {
        // stub
    }

    /**
     * Save settings.
     */
    public function save()
    {
        // stub
    }

    /**
     * Hide the help tabs.
     */
    public function hide_help_tabs()
    {
        // stub
    }

    /**
     * Suppress WP admin notices on the WooCommerce Payments settings page.
     */
    public function suppress_admin_notices()
    {
        // stub
    }

}

