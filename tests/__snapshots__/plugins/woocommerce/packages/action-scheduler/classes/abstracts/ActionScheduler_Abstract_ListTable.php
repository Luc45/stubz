<?php

/**
 * Action Scheduler Abstract List Table class
 *
 * This abstract class enhances WP_List_Table making it ready to use.
 *
 * By extending this class we can focus on describing how our table looks like,
 * which columns needs to be shown, filter, ordered by and more and forget about the details.
 *
 * This class supports:
 *  - Bulk actions
 *  - Search
 *  - Sortable columns
 *  - Automatic translations of the columns
 *
 * @codeCoverageIgnore
 * @since  2.0.0
 */
abstract class ActionScheduler_Abstract_ListTable
{
    /**
     * The table name
     *
     * @var string
     */
    protected $table_name = null;

    /**
     * Package name, used to get options from WP_List_Table::get_items_per_page.
     *
     * @var string
     */
    protected $package = null;

    /**
     * How many items do we render per page?
     *
     * @var int
     */
    protected $items_per_page = 10;

    /**
     * Enables search in this table listing. If this array
     * is empty it means the listing is not searchable.
     *
     * @var array
     */
    protected $search_by = array (
);

    /**
     * Columns to show in the table listing. It is a key => value pair. The
     * key must much the table column name and the value is the label, which is
     * automatically translated.
     *
     * @var array
     */
    protected $columns = array (
);

    /**
     * Defines the row-actions. It expects an array where the key
     * is the column name and the value is an array of actions.
     *
     * The array of actions are key => value, where key is the method name
     * (with the prefix row_action_<key>) and the value is the label
     * and title.
     *
     * @var array
     */
    protected $row_actions = array (
);

    /**
     * The Primary key of our table
     *
     * @var string
     */
    protected $ID = 'ID';

    /**
     * Enables sorting, it expects an array
     * of columns (the column names are the values)
     *
     * @var array
     */
    protected $sort_by = array (
);

    /**
     * The default sort order
     *
     * @var string
     */
    protected $filter_by = array (
);

    /**
     * The status name => count combinations for this table's items. Used to display status filters.
     *
     * @var array
     */
    protected $status_counts = array (
);

    /**
     * Notices to display when loading the table. Array of arrays of form array( 'class' => {updated|error}, 'message' => 'This is the notice text display.' ).
     *
     * @var array
     */
    protected $admin_notices = array (
);

    /**
     * Localised string displayed in the <h1> element above the able.
     *
     * @var string
     */
    protected $table_header = null;

    /**
     * Enables bulk actions. It must be an array where the key is the action name
     * and the value is the label (which is translated automatically). It is important
     * to notice that it will check that the method exists (`bulk_$name`) and will throw
     * an exception if it does not exists.
     *
     * This class will automatically check if the current request has a bulk action, will do the
     * validations and afterwards will execute the bulk method, with two arguments. The first argument
     * is the array with primary keys, the second argument is a string with a list of the primary keys,
     * escaped and ready to use (with `IN`).
     *
     * @var array
     */
    protected $bulk_actions = array (
);

    /**
     * Makes translation easier, it basically just wraps
     * `_x` with some default (the package name).
     *
     * @param string $text The new text to translate.
     * @param string $context The context of the text.
     * @return string|void The translated text.
     *
     * @deprecated 3.0.0 Use `_x()` instead.
     */
    protected function translate($text, $context = '')
    {
        // stub
    }

    /**
     * Reads `$this->bulk_actions` and returns an array that WP_List_Table understands. It
     * also validates that the bulk method handler exists. It throws an exception because
     * this is a library meant for developers and missing a bulk method is a development-time error.
     *
     * @return array
     *
     * @throws RuntimeException Throws RuntimeException when the bulk action does not have a callback method.
     */
    protected function get_bulk_actions()
    {
        // stub
    }

    /**
     * Checks if the current request has a bulk action. If that is the case it will validate and will
     * execute the bulk method handler. Regardless if the action is valid or not it will redirect to
     * the previous page removing the current arguments that makes this request a bulk action.
     */
    protected function process_bulk_action()
    {
        // stub
    }

    /**
     * Default code for deleting entries.
     * validated already by process_bulk_action()
     *
     * @param array  $ids ids of the items to delete.
     * @param string $ids_sql the sql for the ids.
     * @return void
     */
    protected function bulk_delete(array $ids, $ids_sql)
    {
        // stub
    }

    /**
     * Prepares the _column_headers property which is used by WP_Table_List at rendering.
     * It merges the columns and the sortable columns.
     */
    protected function prepare_column_headers()
    {
        // stub
    }

    /**
     * Reads $this->sort_by and returns the columns name in a format that WP_Table_List
     * expects
     */
    public function get_sortable_columns()
    {
        // stub
    }

    /**
     * Returns the columns names for rendering. It adds a checkbox for selecting everything
     * as the first column
     */
    public function get_columns()
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
     * Returns the number of items to offset/skip for this current view.
     *
     * @return int
     */
    protected function get_items_offset()
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
     * Prepares the ORDER BY sql statement. It uses `$this->sort_by` to know which
     * columns are sortable. This requests validates the orderby $_GET parameter is a valid
     * column and sortable. It will also use order (ASC|DESC) using DESC by default.
     */
    protected function get_items_query_order()
    {
        // stub
    }

    /**
     * Querystring arguments to persist between form submissions.
     *
     * @since 3.7.3
     *
     * @return string[]
     */
    protected function get_request_query_args_to_persist()
    {
        // stub
    }

    /**
     * Return the sortable column specified for this request to order the results by, if any.
     *
     * @return string
     */
    protected function get_request_orderby()
    {
        // stub
    }

    /**
     * Return the sortable column order specified for this request.
     *
     * @return string
     */
    protected function get_request_order()
    {
        // stub
    }

    /**
     * Return the status filter for this request, if any.
     *
     * @return string
     */
    protected function get_request_status()
    {
        // stub
    }

    /**
     * Return the search filter for this request, if any.
     *
     * @return string
     */
    protected function get_request_search_query()
    {
        // stub
    }

    /**
     * Process and return the columns name. This is meant for using with SQL, this means it
     * always includes the primary key.
     *
     * @return array
     */
    protected function get_table_columns()
    {
        // stub
    }

    /**
     * Check if the current request is doing a "full text" search. If that is the case
     * prepares the SQL to search texts using LIKE.
     *
     * If the current request does not have any search or if this list table does not support
     * that feature it will return an empty string.
     *
     * @return string
     */
    protected function get_items_query_search()
    {
        // stub
    }

    /**
     * Prepares the SQL to filter rows by the options defined at `$this->filter_by`. Before trusting
     * any data sent by the user it validates that it is a valid option.
     */
    protected function get_items_query_filters()
    {
        // stub
    }

    /**
     * Prepares the data to feed WP_Table_List.
     *
     * This has the core for selecting, sorting and filtering data. To keep the code simple
     * its logic is split among many methods (get_items_query_*).
     *
     * Beside populating the items this function will also count all the records that matches
     * the filtering criteria and will do fill the pagination variables.
     */
    public function prepare_items()
    {
        // stub
    }

    /**
     * Display the table.
     *
     * @param string $which The name of the table.
     */
    public function extra_tablenav($which)
    {
        // stub
    }

    /**
     * Set the data for displaying. It will attempt to unserialize (There is a chance that some columns
     * are serialized). This can be override in child classes for further data transformation.
     *
     * @param array $items Items array.
     */
    protected function set_items(array $items)
    {
        // stub
    }

    /**
     * Renders the checkbox for each row, this is the first column and it is named ID regardless
     * of how the primary key is named (to keep the code simpler). The bulk actions will do the proper
     * name transformation though using `$this->ID`.
     *
     * @param array $row The row to render.
     */
    public function column_cb($row)
    {
        // stub
    }

    /**
     * Renders the row-actions.
     *
     * This method renders the action menu, it reads the definition from the $row_actions property,
     * and it checks that the row action method exists before rendering it.
     *
     * @param array  $row Row to be rendered.
     * @param string $column_name Column name.
     * @return string
     */
    protected function maybe_render_actions($row, $column_name)
    {
        // stub
    }

    /**
     * Process the bulk actions.
     *
     * @return void
     */
    protected function process_row_actions()
    {
        // stub
    }

    /**
     * Default column formatting, it will escape everything for security.
     *
     * @param array  $item The item array.
     * @param string $column_name Column name to display.
     *
     * @return string
     */
    public function column_default($item, $column_name)
    {
        // stub
    }

    /**
     * Display the table heading and search query, if any
     */
    protected function display_header()
    {
        // stub
    }

    /**
     * Display the table heading and search query, if any
     */
    protected function display_admin_notices()
    {
        // stub
    }

    /**
     * Prints the available statuses so the user can click to filter.
     */
    protected function display_filter_by_status()
    {
        // stub
    }

    /**
     * Renders the table list, we override the original class to render the table inside a form
     * and to render any needed HTML (like the search box). By doing so the callee of a function can simple
     * forget about any extra HTML.
     */
    protected function display_table()
    {
        // stub
    }

    /**
     * Process any pending actions.
     */
    public function process_actions()
    {
        // stub
    }

    /**
     * Render the list table page, including header, notices, status filters and table.
     */
    public function display_page()
    {
        // stub
    }

    /**
     * Get the text to display in the search box on the list table.
     */
    protected function get_search_box_placeholder()
    {
        // stub
    }

    /**
     * Gets the screen per_page option name.
     *
     * @return string
     */
    protected function get_per_page_option_name()
    {
        // stub
    }

}
