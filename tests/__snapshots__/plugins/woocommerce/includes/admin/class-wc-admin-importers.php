<?php

namespace ;

/**
 * WC_Admin_Importers Class.
 */
class WC_Admin_Importers extends \
{
    /**
     * Array of importer IDs.
     *
     * @var string[]
     */
    protected $importers = array(
);

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Return true if WooCommerce imports are allowed for current user, false otherwise.
     *
     * @return bool Whether current user can perform imports.
     */
    protected function import_allowed()
    {
        // stub
    }

    /**
     * Add menu items for our custom importers.
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
     * Register importer scripts.
     */
    public function admin_scripts()
    {
        // stub
    }

    /**
     * The product importer.
     *
     * This has a custom screen - the Tools > Import item is a placeholder.
     * If we're on that screen, redirect to the custom one.
     */
    public function product_importer()
    {
        // stub
    }

    /**
     * Register WordPress based importers.
     */
    public function register_importers()
    {
        // stub
    }

    /**
     * The tax rate importer which extends WP_Importer.
     */
    public function tax_rates_importer()
    {
        // stub
    }

    /**
     * When running the WP XML importer, ensure attributes exist.
     *
     * WordPress import should work - however, it fails to import custom product attribute taxonomies.
     * This code grabs the file before it is imported and ensures the taxonomies are created.
     */
    public function post_importer_compatibility()
    {
        // stub
    }

    /**
     * Ajax callback for importing one batch of products from a CSV.
     */
    public function do_ajax_product_import()
    {
        // stub
    }

    /**
     * Track importer/exporter view.
     *
     * @return void
     */
    public function track_importer_exporter_view()
    {
        // stub
    }

}

