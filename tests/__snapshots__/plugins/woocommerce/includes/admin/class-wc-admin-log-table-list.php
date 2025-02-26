<?php

namespace ;

class WC_Admin_Log_Table_List
{
    const PER_PAGE_USER_OPTION_KEY = 'woocommerce_status_log_items_per_page';

    /**
     * Initialize the log table list.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Display level dropdown
     *
     * @global wpdb $wpdb
     */
    public function level_dropdown()
    {
        // stub
    }

    /**
     * Generates the table rows.
     *
     * @return void
     */
    public function display_rows()
    {
        // stub
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
        // stub
    }

    /**
     * Get list columns.
     *
     * @return array
     */
    public function get_columns()
    {
        // stub
    }

    /**
     * Column cb.
     *
     * @param  array $log
     * @return string
     */
    public function column_cb($log)
    {
        // stub
    }

    /**
     * Timestamp column.
     *
     * @param  array $log
     * @return string
     */
    public function column_timestamp($log)
    {
        // stub
    }

    /**
     * Level column.
     *
     * @param  array $log
     * @return string
     */
    public function column_level($log)
    {
        // stub
    }

    /**
     * Message column.
     *
     * @param  array $log
     * @return string
     */
    public function column_message($log)
    {
        // stub
    }

    /**
     * Source column.
     *
     * @param  array $log
     * @return string
     */
    public function column_source($log)
    {
        // stub
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
        // stub
    }

    /**
     * Get bulk actions.
     *
     * @return array
     */
    protected function get_bulk_actions()
    {
        // stub
    }

    /**
     * Extra controls to be displayed between bulk actions and pagination.
     *
     * @param string $which
     */
    protected function extra_tablenav($which)
    {
        // stub
    }

    /**
     * Get a list of sortable columns.
     *
     * @return array
     */
    protected function get_sortable_columns()
    {
        // stub
    }

    /**
     * Display source dropdown
     *
     * @global wpdb $wpdb
     */
    protected function source_dropdown()
    {
        // stub
    }

    /**
     * Prepare table list items.
     *
     * @global wpdb $wpdb
     */
    public function prepare_items()
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Get prepared ORDER BY clause for items query
     *
     * @return string Prepared ORDER BY clause for items query.
     */
    protected function get_items_query_order()
    {
        // stub
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
        // stub
    }

    /**
     * Set _column_headers property for table list
     */
    protected function prepare_column_headers()
    {
        // stub
    }

    /**
     * Helper to get the default value for the per_page arg.
     *
     * @return int
     */
    public function get_per_page_default(): int
    {
        // stub
    }

}

