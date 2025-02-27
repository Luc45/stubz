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
     * Array of initialized exporters.
     *
     * @var StepExporter[]
     */
    private array $initialized_exporters = array (
);

    /**
     * Init constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Register REST API routes.
     *
     * @return void
     */
    public function init_rest_api()
    {
        // stub
    }

    /**
     * Return Woo Exporter classnames.
     *
     * @return StepExporter[]
     */
    public function get_woo_exporters()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

}