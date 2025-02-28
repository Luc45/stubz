<?php

class WC_Admin_Log_Table_List extends \WP_List_Table
{
    /**
     * The key for the user option of how many list table items to display per page.
     *
     * @const string
     */
    public const PER_PAGE_USER_OPTION_KEY = 'woocommerce_status_log_items_per_page';
    /**
     * Initialize the log table list.
     */
    public function __construct()
    {
    }
    /**
     * Display level dropdown
     *
     * @global wpdb $wpdb
     */
    public function level_dropdown()
    {
    }
    /**
     * Generates the table rows.
     *
     * @return void
     */
    public function display_rows()
    {
    }
    /**
     * Render the additional table row that contains extra log context data.
     *
     * @param array $log Log entry data.
     *
     * @return void
     */
    protected function context_row($log)
    {
    }
    /**
     * Get list columns.
     *
     * @return array
     */
    public function get_columns()
    {
    }
    /**
     * Column cb.
     *
     * @param  array $log
     * @return string
     */
    public function column_cb($log)
    {
    }
    /**
     * Timestamp column.
     *
     * @param  array $log
     * @return string
     */
    public function column_timestamp($log)
    {
    }
    /**
     * Level column.
     *
     * @param  array $log
     * @return string
     */
    public function column_level($log)
    {
    }
    /**
     * Message column.
     *
     * @param  array $log
     * @return string
     */
    public function column_message($log)
    {
    }
    /**
     * Source column.
     *
     * @param  array $log
     * @return string
     */
    public function column_source($log)
    {
    }
    /**
     * Context column.
     *
     * @param array $log Log entry data.
     *
     * @return string
     */
    public function column_context($log)
    {
    }
    /**
     * Get bulk actions.
     *
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Extra controls to be displayed between bulk actions and pagination.
     *
     * @param string $which
     */
    protected function extra_tablenav($which)
    {
    }
    /**
     * Get a list of sortable columns.
     *
     * @return array
     */
    protected function get_sortable_columns()
    {
    }
    /**
     * Display source dropdown
     *
     * @global wpdb $wpdb
     */
    protected function source_dropdown()
    {
    }
    /**
     * Prepare table list items.
     *
     * @global wpdb $wpdb
     */
    public function prepare_items()
    {
    }
    /**
     * Get prepared LIMIT clause for items query
     *
     * @global wpdb $wpdb
     *
     * @return string Prepared LIMIT clause for items query.
     */
    protected function get_items_query_limit()
    {
    }
    /**
     * Get prepared OFFSET clause for items query
     *
     * @global wpdb $wpdb
     *
     * @return string Prepared OFFSET clause for items query.
     */
    protected function get_items_query_offset()
    {
    }
    /**
     * Get prepared ORDER BY clause for items query
     *
     * @return string Prepared ORDER BY clause for items query.
     */
    protected function get_items_query_order()
    {
    }
    /**
     * Get prepared WHERE clause for items query
     *
     * @global wpdb $wpdb
     *
     * @return string Prepared WHERE clause for items query.
     */
    protected function get_items_query_where()
    {
    }
    /**
     * Set _column_headers property for table list
     */
    protected function prepare_column_headers()
    {
    }
    /**
     * Helper to get the default value for the per_page arg.
     *
     * @return int
     */
    public function get_per_page_default() : int
    {
    }
}