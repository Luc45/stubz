<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Exporters;

/**
 * Class ExportWCSettings
 *
 * This class exports WooCommerce settings and implements the StepExporter and HasAlias interfaces.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint\Exporters
 */
class ExportWCSettings
{
    /**
     * Array of WC_Settings_Page objects.
     *
     * @var WC_Settings_Page[]
     */
    private array $setting_pages;

    /**
     * Array of page IDs to exclude from export.
     *
     * @var array
     */
    private array $exclude_pages = array (
  0 => 'integration',
  1 => 'site-visibility',
);

    /**
     * Constructor.
     *
     * @param array $setting_pages Optional array of setting pages.
     */
    public function __construct(array $setting_pages = array (
))
    {
        // stub
    }

    /**
     * Export WooCommerce settings.
     *
     * @return SetSiteOptions
     */
    public function export()
    {
        // stub
    }

    /**
     * Get information about a settings page.
     *
     * @param WC_Settings_Page $page The settings page.
     * @return array
     */
    protected function get_page_info(WC_Settings_Page $page)
    {
        // stub
    }

    /**
     * Get settings for a specific page section.
     *
     * @param array  $settings The settings.
     * @param string $page The page ID.
     * @param string $section The section ID.
     * @return array
     */
    private function get_page_section_settings($settings, $page, $section = '')
    {
        // stub
    }

    /**
     * Add site visibility settings.
     *
     * @param array $options The options array.
     * @param array $pages The pages array.
     * @param array $option_info The option information array.
     * @return array
     */
    public function add_site_visibility_settings(array $options, array $pages, array $option_info)
    {
        // stub
    }

    /**
     * Get the name of the step.
     *
     * @return string
     */
    public function get_step_name()
    {
        // stub
    }

    /**
     * Get the alias for this exporter.
     *
     * @return string
     */
    public function get_alias()
    {
        // stub
    }

    /**
     * Return label used in the frontend.
     *
     * @return string
     */
    public function get_label()
    {
        // stub
    }

    /**
     * Return description used in the frontend.
     *
     * @return string
     */
    public function get_description()
    {
        // stub
    }

}

