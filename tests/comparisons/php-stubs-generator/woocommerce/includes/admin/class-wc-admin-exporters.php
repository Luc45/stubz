<?php

/**
 * WC_Admin_Exporters Class.
 */
class WC_Admin_Exporters
{
    /**
     * Array of exporter IDs.
     *
     * @var string[]
     */
    protected $exporters = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return true if WooCommerce export is allowed for current user, false otherwise.
     *
     * @return bool Whether current user can perform export.
     */
    protected function export_allowed()
    {
    }
    /**
     * Add menu items for our custom exporters.
     */
    public function add_to_menus()
    {
    }
    /**
     * Hide menu items from view so the pages exist, but the menu items do not.
     */
    public function hide_from_menus()
    {
    }
    /**
     * Enqueue scripts.
     */
    public function admin_scripts()
    {
    }
    /**
     * Export page UI.
     */
    public function product_exporter()
    {
    }
    /**
     * Serve the generated file.
     */
    public function download_export_file()
    {
    }
    /**
     * AJAX callback for doing the actual export to the CSV file.
     */
    public function do_ajax_product_export()
    {
    }
    /**
     * Gets the product types that can be exported.
     *
     * @since 5.1.0
     * @return array The product types keys and labels.
     */
    public static function get_product_types()
    {
    }
}
