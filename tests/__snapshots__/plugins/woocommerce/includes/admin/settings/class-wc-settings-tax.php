<?php

/**
 * WC_Settings_Tax.
 */
class WC_Settings_Tax
{
    /**
     * Setting page icon.
     *
     * @var string
     */
    public $icon = 'percent';

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Creates the React mount point for the embedded banner.
     */
    public function conflict_error()
    {
        // stub
    }

    /**
     * Add this page to settings.
     *
     * @param array $pages Existing pages.
     * @return array|mixed
     */
    public function add_settings_page($pages)
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
    public function get_settings_for_default_section()
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
     * Save settings.
     */
    public function save()
    {
        // stub
    }

    /**
     * Saves tax classes defined in the textarea to the tax class table instead of an option.
     *
     * @param string $raw_tax_classes Posted value.
     * @return null
     */
    public function save_tax_classes($raw_tax_classes)
    {
        // stub
    }

    /**
     * Output tax rate tables.
     */
    public function output_tax_rates()
    {
        // stub
    }

    /**
     * Get tax class being edited.
     *
     * @return string
     */
    private static function get_current_tax_class()
    {
        // stub
    }

    /**
     * Get a posted tax rate.
     *
     * @param string $key   Key of tax rate in the post data array.
     * @param int    $order Position/order of rate.
     * @param string $class Tax class for rate.
     * @return array
     */
    private function get_posted_tax_rate($key, $order, $class)
    {
        // stub
    }

    /**
     * Save tax rates.
     */
    public function save_tax_rates()
    {
        // stub
    }

}
