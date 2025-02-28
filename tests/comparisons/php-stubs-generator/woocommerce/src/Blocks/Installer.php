<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Installer class.
 * Handles installation of Blocks plugin dependencies.
 *
 * @internal
 */
class Installer
{
    /**
     * Initialize class features.
     */
    public function init()
    {
    }
    /**
     * Installation tasks ran on admin_init callback.
     */
    public function install()
    {
    }
    /**
     * Modifies default page content replacing it with classic shortcode block.
     * We check for shortcode as default because after WooCommerce 8.3, block-based checkout is used by default.
     * This only runs on Tools > Create Pages as the filter is not applied on WooCommerce plugin activation.
     *
     * @param array $pages Default pages.
     * @return array
     */
    public function create_pages($pages)
    {
    }
    /**
     * Set up the database tables which the plugin needs to function.
     */
    public function maybe_create_tables()
    {
    }
    /**
     * Create database table, if it doesn't already exist.
     *
     * Based on admin/install-helper.php maybe_create_table function.
     *
     * @param string $table_name Database table name.
     * @param string $create_sql Create database table SQL.
     * @return bool False on error, true if already exists or success.
     */
    protected function maybe_create_table($table_name, $create_sql)
    {
    }
    /**
     * Add a notice if table creation fails.
     *
     * @param string $table_name Name of the missing table.
     */
    protected function add_create_table_notice($table_name)
    {
    }
}