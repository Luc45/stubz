<?php

/**
 * WC_Settings_Payment_Gateways.
 */
class WC_Settings_Payment_Gateways
{
    /**
     * Setting page icon.
     *
     * @var string
     */
    public $icon = 'payment';

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Get own sections.
     *
     * @return array
     */
    protected function get_own_sections()
    {
        // stub
    }

    /**
     * Get settings array.
     *
     * @return array
     */
    protected function get_settings_for_default_section()
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
     * Run the 'admin_options' method on a given gateway.
     * This method exists to easy unit testing.
     *
     * @param object $gateway The gateway object to run the method on.
     */
    protected function run_gateway_admin_options($gateway)
    {
        // stub
    }

    /**
     * Creates the React mount point for the embedded banner.
     */
    public function payment_gateways_banner()
    {
        // stub
    }

    /**
     * Output payment gateway settings.
     */
    public function payment_gateways_setting()
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

}
