<?php

/**
 * WC_Settings_Shipping.
 */
class WC_Settings_Shipping extends \WC_Settings_Page
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
    public $icon = 'shipping';
    /**
     * Add this page to settings.
     *
     * @param array $pages Current pages.
     * @return array|mixed
     */
    public function add_settings_page($pages)
    {
    }
    /**
     * Get own sections.
     *
     * @return array
     */
    protected function get_own_sections()
    {
    }
    /**
     * Is WC_INSTALLING constant defined?
     * This method exists to ease unit testing.
     *
     * @return bool True is the WC_INSTALLING constant is defined.
     */
    protected function wc_is_installing()
    {
    }
    /**
     * Get the currently available shipping methods.
     * This method exists to ease unit testing.
     *
     * @return array Currently available shipping methods.
     */
    protected function get_shipping_methods()
    {
    }
    /**
     * Get settings for the default section.
     *
     * The original implementation of 'get_settings' was returning the settings for the "Options" section
     * when the supplied value for $current_section was ''.
     *
     * @return array
     */
    protected function get_settings_for_default_section()
    {
    }
    /**
     * Get settings for the options section.
     *
     * @return array
     */
    protected function get_settings_for_options_section()
    {
    }
    /**
     * Output the settings.
     */
    public function output()
    {
    }
    /**
     * Save settings.
     */
    public function save()
    {
    }
    /**
     * Handles output of the shipping zones page in admin.
     */
    protected function output_zones_screen()
    {
    }
    /**
     * Get all available regions.
     *
     * @param int $allowed_countries Zone ID.
     * @param int $shipping_continents Zone ID.
     */
    protected function get_region_options($allowed_countries, $shipping_continents)
    {
    }
    /**
     * Show method for a zone
     *
     * @param int $zone_id Zone ID.
     */
    protected function zone_methods_screen($zone_id)
    {
    }
    /**
     * Show zones
     */
    protected function zones_screen()
    {
    }
    /**
     * Show instance settings
     *
     * @param int $instance_id Shipping instance ID.
     */
    protected function instance_settings_screen($instance_id)
    {
    }
    /**
     * Handles output of the shipping class settings screen.
     */
    protected function output_shipping_class_screen()
    {
    }
}