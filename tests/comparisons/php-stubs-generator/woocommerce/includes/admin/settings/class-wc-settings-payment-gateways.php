<?php

/**
 * WC_Settings_Payment_Gateways.
 */
class WC_Settings_Payment_Gateways extends \WC_Settings_Page
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Setting page icon.
     *
     * @var string
     */
    public $icon = 'payment';
    /**
     * Get own sections.
     *
     * @return array
     */
    protected function get_own_sections()
    {
    }
    /**
     * Get settings array.
     *
     * @return array
     */
    protected function get_settings_for_default_section()
    {
    }
    /**
     * Output the settings.
     */
    public function output()
    {
    }
    /**
     * Run the 'admin_options' method on a given gateway.
     * This method exists to easy unit testing.
     *
     * @param object $gateway The gateway object to run the method on.
     */
    protected function run_gateway_admin_options($gateway)
    {
    }
    /**
     * Creates the React mount point for the embedded banner.
     */
    public function payment_gateways_banner()
    {
    }
    /**
     * Output payment gateway settings.
     */
    public function payment_gateways_setting()
    {
    }
    /**
     * Save settings.
     */
    public function save()
    {
    }
}