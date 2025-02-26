<?php

namespace ;

/**
 * System status controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_System_Status_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'system_status';

    /**
     * Register cache cleaner
     *
     * Handles all the cache cleaning for this endpoint. We need to register
     * these functions before the routes are registered, so this function gets
     * called from Server.php
     */
    public static function register_cache_clean()
    {
        // stub
    }

    /**
     * Register the route for /system_status
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to view system status.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Get a system status info, by section.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Get the system status schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Return an array of sections and the data associated with each.
     *
     * @deprecated 3.9.0
     * @return array
     */
    public function get_item_mappings()
    {
        // stub
    }

    /**
     * Return an array of sections and the data associated with each.
     *
     * @since 3.9.0
     * @param array $fields List of fields to be included on the response.
     * @return array
     */
    public function get_item_mappings_per_fields($fields)
    {
        // stub
    }

    /**
     * Get array of environment information. Includes thing like software
     * versions, and various server settings.
     *
     * @deprecated 3.9.0
     * @return array
     */
    public function get_environment_info()
    {
        // stub
    }

    /**
     * Check if field item exists.
     *
     * @since 3.9.0
     * @param string $section Fields section.
     * @param array  $items List of items to check for.
     * @param array  $fields List of fields to be included on the response.
     * @return bool
     */
    private function check_if_field_item_exists($section, $items, $fields)
    {
        // stub
    }

    /**
     * Get array of environment information. Includes thing like software
     * versions, and various server settings.
     *
     * @param array $fields List of fields to be included on the response.
     * @return array
     */
    public function get_environment_info_per_fields($fields)
    {
        // stub
    }

    /**
     * Add prefix to table.
     *
     * @param string $table Table name.
     * @return stromg
     */
    protected function add_db_table_prefix($table)
    {
        // stub
    }

    /**
     * Get array of database information. Version, prefix, and table existence.
     *
     * @return array
     */
    public function get_database_info()
    {
        // stub
    }

    /**
     * Get array of counts of objects. Orders, products, etc.
     *
     * @return array
     */
    public function get_post_type_counts()
    {
        // stub
    }

    /**
     * Get a list of plugins active on the site.
     *
     * @return array
     */
    public function get_active_plugins()
    {
        // stub
    }

    /**
     * Get a list of inactive plugins.
     *
     * @return array
     */
    public function get_inactive_plugins()
    {
        // stub
    }

    /**
     * Format plugin data, including data on updates, into a standard format.
     *
     * @since 3.6.0
     * @param string $plugin Plugin directory/file.
     * @param array  $data Plugin data from WP.
     * @return array Formatted data.
     */
    protected function format_plugin_data($plugin, $data)
    {
        // stub
    }

    /**
     * Get a list of Dropins and MU plugins.
     *
     * @since 3.6.0
     * @return array
     */
    public function get_dropins_mu_plugins()
    {
        // stub
    }

    /**
     * Get info on the current active theme, info on parent theme (if presnet)
     * and a list of template overrides.
     *
     * @return array
     */
    public function get_theme_info()
    {
        // stub
    }

    /**
     * Clear the system status theme cache
     */
    public static function clean_theme_cache()
    {
        // stub
    }

    /**
     * Clear the system status plugin caches
     */
    public static function clean_plugin_cache()
    {
        // stub
    }

    /**
     * Get some setting values for the site that are useful for debugging
     * purposes. For full settings access, use the settings api.
     *
     * @return array
     */
    public function get_settings()
    {
        // stub
    }

    /**
     * Returns security tips.
     *
     * @return array
     */
    public function get_security_info()
    {
        // stub
    }

    /**
     * Returns a mini-report on WC pages and if they are configured correctly:
     * Present, visible, and including the correct shortcode or block.
     *
     * @return array
     */
    public function get_pages()
    {
        // stub
    }

    /**
     * Get info about the logging system.
     *
     * @return array
     */
    protected function get_logging_info()
    {
        // stub
    }

    /**
     * Get any query params needed.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

    /**
     * Prepare the system status response
     *
     * @param  array           $system_status System status data.
     * @param  WP_REST_Request $request       Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($system_status, $request)
    {
        // stub
    }

}

