<?php

/**
 * WC_Settings_Tax.
 */
class WC_Settings_Tax extends \WC_Settings_Page
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
    public $icon = 'percent';
    /**
     * Creates the React mount point for the embedded banner.
     */
    public function conflict_error()
    {
    }
    /**
     * Add this page to settings.
     *
     * @param array $pages Existing pages.
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
     * Get settings array.
     *
     * @return array
     */
    public function get_settings_for_default_section()
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
     * Saves tax classes defined in the textarea to the tax class table instead of an option.
     *
     * @param string $raw_tax_classes Posted value.
     * @return null
     */
    public function save_tax_classes($raw_tax_classes)
    {
    }
    /**
     * Output tax rate tables.
     */
    public function output_tax_rates()
    {
    }
    /**
     * Save tax rates.
     */
    public function save_tax_rates()
    {
    }
}