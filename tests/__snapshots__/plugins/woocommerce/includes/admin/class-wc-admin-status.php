<?php
/**
 * WC_Admin_Status Class.
 */
class WC_Admin_Status
{
    /**
     * An instance of the DB log handler list table.
     *
     * @var WC_Admin_Log_Table_List
     */
    private static $db_log_list_table = null;
    /**
     * Handles output of the reports page in admin.
     */
    public static function output()
{
}
    /**
     * Handles output of report.
     */
    public static function status_report()
{
}
    /**
     * Handles output of tools.
     */
    public static function status_tools()
{
}
    /**
     * Get tools.
     *
     * @return array of tools
     */
    public static function get_tools()
{
}
    /**
     * Show the logs page.
     */
    public static function status_logs()
{
}
    /**
     * Show the log page contents for file log handler.
     */
    public static function status_logs_file()
{
}
    /**
     * Show the log page contents for db log handler.
     */
    public static function status_logs_db()
{
}
    /**
     * Retrieve metadata from a file. Based on WP Core's get_file_data function.
     *
     * @since  2.1.1
     * @param  string $file Path to the file.
     * @return string
     */
    public static function get_file_version($file)
{
}
    /**
     * Return the log file handle.
     *
     * @param string $filename Filename to get the handle for.
     * @return string
     */
    public static function get_log_file_handle($filename)
{
}
    /**
     * Scan the template files.
     *
     * @param  string $template_path Path to the template directory.
     * @return array
     */
    public static function scan_template_files($template_path)
{
}
    /**
     * Scan the log files.
     *
     * @return array
     */
    public static function scan_log_files()
{
}
    /**
     * Get latest version of a theme by slug.
     *
     * @param  object $theme WP_Theme object.
     * @return string Version number if found.
     */
    public static function get_latest_theme_version($theme)
{
}
    /**
     * Remove/delete the chosen file.
     */
    public static function remove_log()
{
}
    /**
     * Return a stored instance of the DB log list table class.
     *
     * @return WC_Admin_Log_Table_List
     */
    public static function get_db_log_list_table()
{
}
    /**
     * Clear DB log table.
     *
     * @since 3.0.0
     */
    private static function flush_db_logs()
{
}
    /**
     * Bulk DB log table actions.
     *
     * @since 3.0.0
     */
    private static function log_table_bulk_actions()
{
}
    /**
     * Prints table info if a base table is not present.
     */
    private static function output_tables_info()
{
}
    /**
     * Prints the information about plugins for the system status report.
     * Used for both active and inactive plugins sections.
     *
     * @param array $plugins List of plugins to display.
     * @param array $untested_plugins List of plugins that haven't been tested with the current WooCommerce version.
     * @return void
     */
    private static function output_plugins_info($plugins, $untested_plugins)
{
}
}
