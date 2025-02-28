<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint;

/**
 * Class Init
 *
 * This class initializes the Blueprint feature for WooCommerce.
 */
class Init
{
    /**
     * Init constructor.
     */
    public function __construct()
{
}
    /**
     * Register REST API routes.
     *
     * @return void
     */
    public function init_rest_api()
{
}
    /**
     * Return Woo Exporter classnames.
     *
     * @return StepExporter[]
     */
    public function get_woo_exporters()
{
}
    /**
     * Add Woo Specific Exporters.
     *
     * @param StepExporter[] $exporters Array of step exporters.
     *
     * @return StepExporter[]
     */
    public function add_woo_exporters(array $exporters)
{
}
    /**
     * Add Woo Specific Importers.
     *
     * @param StepProcessor[] $importers Array of step processors.
     *
     * @return array
     */
    public function add_woo_importers(array $importers)
{
}
    /**
     * Return step groups for JS.
     *
     * This is used to populate exportable items on the blueprint settings page.
     *
     * @return array
     */
    public function get_step_groups_for_js()
{
}
    /**
     * Add shared JS vars.
     *
     * @param array $settings shared settings.
     *
     * @return mixed
     */
    public function add_js_vars($settings)
{
}
}