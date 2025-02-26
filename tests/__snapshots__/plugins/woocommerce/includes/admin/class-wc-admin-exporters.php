<?php

namespace ;

/**
 * WC_Admin_Exporters Class.
 */
class WC_Admin_Exporters extends \
{
    /**
     * Array of exporter IDs.
     *
     * @var string[]
     */
    protected $exporters = array(
);

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Return true if WooCommerce export is allowed for current user, false otherwise.
     *
     * @return bool Whether current user can perform export.
     */
    protected function export_allowed()
    {
        // stub
    }

    /**
     * Add menu items for our custom exporters.
     */
    public function add_to_menus()
    {
        // stub
    }

    /**
     * Hide menu items from view so the pages exist, but the menu items do not.
     */
    public function hide_from_menus()
    {
        // stub
    }

    /**
     * Enqueue scripts.
     */
    public function admin_scripts()
    {
        // stub
    }

    /**
     * Export page UI.
     */
    public function product_exporter()
    {
        // stub
    }

    /**
     * Serve the generated file.
     */
    public function download_export_file()
    {
        // stub
    }

    /**
     * AJAX callback for doing the actual export to the CSV file.
     */
    public function do_ajax_product_export()
    {
        // stub
    }

    /**
     * Gets the product types that can be exported.
     *
     * @since 5.1.0
     * @return array The product types keys and labels.
     */
    public static function get_product_types()
    {
        // stub
    }

}

