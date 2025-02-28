<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Exporters;

/**
 * Class ExportWCSettings
 *
 * This class exports WooCommerce settings and implements the StepExporter and HasAlias interfaces.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint\Exporters
 */
class ExportWCSettings implements \Automattic\WooCommerce\Blueprint\Exporters\HasAlias, \Automattic\WooCommerce\Blueprint\Exporters\StepExporter
{
    /**
     * Constructor.
     *
     * @param array $setting_pages Optional array of setting pages.
     */
    public function __construct(array $setting_pages = array())
{
}
    /**
     * Export WooCommerce settings.
     *
     * @return SetSiteOptions
     */
    public function export()
{
}
    /**
     * Get information about a settings page.
     *
     * @param WC_Settings_Page $page The settings page.
     * @return array
     */
    protected function get_page_info(WC_Settings_Page $page)
{
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
}
    /**
     * Get the name of the step.
     *
     * @return string
     */
    public function get_step_name()
{
}
    /**
     * Get the alias for this exporter.
     *
     * @return string
     */
    public function get_alias()
{
}
    /**
     * Return label used in the frontend.
     *
     * @return string
     */
    public function get_label()
{
}
    /**
     * Return description used in the frontend.
     *
     * @return string
     */
    public function get_description()
{
}
}