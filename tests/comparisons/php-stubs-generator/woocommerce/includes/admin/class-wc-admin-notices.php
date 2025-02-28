<?php

/**
 * WC_Admin_Notices Class.
 */
class WC_Admin_Notices
{
    /**
     * Initializes the class.
     */
    public static function init()
    {
    }
    /**
     * Parses query to create nonces when available.
     *
     * @deprecated 5.4.0
     * @param object $response The WP_REST_Response we're working with.
     * @return object $response The prepared WP_REST_Response object.
     */
    public static function prepare_note_with_nonce($response)
    {
    }
    /**
     * Store the locally cached notices to DB.
     */
    public static function store_notices()
    {
    }
    /**
     * Get the value of the locally cached notices array for the current site.
     *
     * @return array
     */
    public static function get_notices()
    {
    }
    /**
     * Remove all notices from the locally cached notices array.
     */
    public static function remove_all_notices()
    {
    }
    /**
     * Reset notices for themes when switched or a new version of WC is installed.
     */
    public static function reset_admin_notices()
    {
    }
    /**
     * Remove the admin notice about the unsupported webhooks if the Legacy REST API plugin is installed.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function maybe_remove_legacy_api_removal_notice()
    {
    }
    /**
     * Show a notice.
     *
     * @param string $name Notice name.
     * @param bool   $force_save Force saving inside this method instead of at the 'shutdown'.
     */
    public static function add_notice($name, $force_save = \false)
    {
    }
    /**
     * Remove a notice from being displayed.
     *
     * @param string $name Notice name.
     * @param bool   $force_save Force saving inside this method instead of at the 'shutdown'.
     */
    public static function remove_notice($name, $force_save = \false)
    {
    }
    /**
     * Remove a given set of notices.
     *
     * An array of notice names or a regular expression string can be passed, in the later case
     * all the notices whose name matches the regular expression will be removed.
     *
     * @param array|string $names_array_or_regex An array of notice names, or a string representing a regular expression.
     * @param bool         $force_save Force saving inside this method instead of at the 'shutdown'.
     * @return void
     */
    public static function remove_notices($names_array_or_regex, $force_save = \false)
    {
    }
    /**
     * See if a notice is being shown.
     *
     * @param string $name Notice name.
     *
     * @return boolean
     */
    public static function has_notice($name)
    {
    }
    /**
     * Hide a notice if the GET variable is set.
     */
    public static function hide_notices()
    {
    }
    /**
     * Check if a given user has dismissed a given admin notice.
     *
     * @since 8.5.0
     *
     * @param string   $name The name of the admin notice to check.
     * @param int|null $user_id User id, or null for the current user.
     * @return bool True if the user has dismissed the notice.
     */
    public static function user_has_dismissed_notice(string $name, ?int $user_id = \null): bool
    {
    }
    /**
     * Add notices + styles if needed.
     */
    public static function add_notices()
    {
    }
    /**
     * Add a custom notice.
     *
     * @param string $name        Notice name.
     * @param string $notice_html Notice HTML.
     */
    public static function add_custom_notice($name, $notice_html)
    {
    }
    /**
     * Output any stored custom notices.
     */
    public static function output_custom_notices()
    {
    }
    /**
     * If we need to update the database, include a message with the DB update button.
     */
    public static function update_notice()
    {
    }
    /**
     * If we have just installed, show a message with the install pages button.
     *
     * @deprecated 4.6.0
     */
    public static function install_notice()
    {
    }
    /**
     * Show a notice highlighting bad template files.
     */
    public static function template_file_check_notice()
    {
    }
    /**
     * Show a notice asking users to convert to shipping zones.
     *
     * @todo remove in 4.0.0
     */
    public static function legacy_shipping_notice()
    {
    }
    /**
     * No shipping methods.
     */
    public static function no_shipping_methods_notice()
    {
    }
    /**
     * Notice shown when regenerating thumbnails background process is running.
     */
    public static function regenerating_thumbnails_notice()
    {
    }
    /**
     * Notice about secure connection.
     */
    public static function secure_connection_notice()
    {
    }
    /**
     * Notice shown when regenerating thumbnails background process is running.
     *
     * @since 3.6.0
     */
    public static function regenerating_lookup_table_notice()
    {
    }
    /**
     * Add notice about minimum PHP and WordPress requirement.
     *
     * @since 3.6.5
     */
    public static function add_min_version_notice()
    {
    }
    /**
     * Notice about WordPress and PHP minimum requirements.
     *
     * @deprecated 8.2.0 WordPress and PHP minimum requirements notices are no longer shown.
     *
     * @since 3.6.5
     * @return void
     */
    public static function wp_php_min_requirements_notice()
    {
    }
    /**
     * Add MaxMind missing license key notice.
     *
     * @since 3.9.0
     */
    public static function add_maxmind_missing_license_key_notice()
    {
    }
    /**
     *  Add notice about Redirect-only download method, nudging user to switch to a different method instead.
     */
    public static function add_redirect_download_method_notice()
    {
    }
    /**
     * Notice about the completion of the product downloads sync, with further advice for the site operator.
     */
    public static function download_directories_sync_complete()
    {
    }
    /**
     * Display MaxMind missing license key notice.
     *
     * @since 3.9.0
     */
    public static function maxmind_missing_license_key_notice()
    {
    }
    /**
     * Notice about Redirect-Only download method.
     *
     * @since 4.0
     */
    public static function redirect_download_method_notice()
    {
    }
    /**
     * Notice about uploads directory begin unprotected.
     *
     * @since 4.2.0
     */
    public static function uploads_directory_is_unprotected_notice()
    {
    }
    /**
     * Notice about base tables missing.
     */
    public static function base_tables_missing_notice()
    {
    }
    /**
     * Determine if the store is running SSL.
     *
     * @return bool Flag SSL enabled.
     * @since  3.5.1
     */
    protected static function is_ssl()
    {
    }
    /**
     * Wrapper for is_plugin_active.
     *
     * @param string $plugin Plugin to check.
     * @return boolean
     */
    protected static function is_plugin_active($plugin)
    {
    }
    /**
     * Simplify Commerce is no longer in core.
     *
     * @deprecated 3.6.0 No longer shown.
     */
    public static function simplify_commerce_notice()
    {
    }
    /**
     * Show the Theme Check notice.
     *
     * @deprecated 3.3.0 No longer shown.
     */
    public static function theme_check_notice()
    {
    }
    /**
     * Check if uploads directory is protected.
     *
     * @since 4.2.0
     * @return bool
     */
    protected static function is_uploads_directory_protected()
    {
    }
}
