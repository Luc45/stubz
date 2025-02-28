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
     * Add upload nonce to global JS settings.
     *
     * The value can be accessed at wcSettings.admin.blueprint_upload_nonce
     *
     * @param array $settings Global JS settings.
     *
     * @return array
     */
    public function add_upload_nonce_to_settings(array $settings)
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
}
