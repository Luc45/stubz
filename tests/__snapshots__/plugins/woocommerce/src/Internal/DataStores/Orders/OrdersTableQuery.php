<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * This class provides a `WP_Query`-like interface to custom order tables.
 *
 * @property-read int   $found_orders  Number of found orders.
 * @property-read int   $found_posts   Alias of the `$found_orders` property.
 * @property-read int   $max_num_pages Max number of pages matching the current query.
 * @property-read array $orders        Order objects, or order IDs.
 * @property-read array $posts         Alias of the $orders property.
 */
class OrdersTableQuery
{
    const SKIPPED_VALUES = array (
  0 => '',
  1 => 
  array (
  ),
  2 => null,
);

    const REGEX_SHORTHAND_DATES = '/([^.<>]*)(>=|<=|>|<|\\.\\.\\.)([^.<>]+)/';

    const MYSQL_MAX_UNSIGNED_BIGINT = '18446744073709551615';

    /**
     * Names of all COT tables (orders, addresses, operational_data, meta) in the form 'table_id' => 'table name'.
     *
     * @var array
     */
    private $tables = array (
);

    /**
     * Column mappings for all COT tables.
     *
     * @var array
     */
    private $mappings = array (
);

    /**
     * Query vars after processing and sanitization.
     *
     * @var array
     */
    private $args = array (
);

    /**
     * Columns to be selected in the SELECT clause.
     *
     * @var array
     */
    private $fields = array (
);

    /**
     * Array of table aliases and conditions used to compute the JOIN clause of the query.
     *
     * @var array
     */
    private $join = array (
);

    /**
     * Array of fields and conditions used to compute the WHERE clause of the query.
     *
     * @var array
     */
    private $where = array (
);

    /**
     * Field to be used in the GROUP BY clause of the query.
     *
     * @var array
     */
    private $groupby = array (
);

    /**
     * Array of fields used to compute the ORDER BY clause of the query.
     *
     * @var array
     */
    private $orderby = array (
);

    /**
     * Limits used to compute the LIMIT clause of the query.
     *
     * @var array
     */
    private $limits = array (
);

    /**
     * Results (order IDs) for the current query.
     *
     * @var array
     */
    private $orders = array (
);

    /**
     * Final SQL query to run after processing of args.
     *
     * @var string
     */
    private $sql = '';

    /**
     * Final SQL query to count results after processing of args.
     *
     * @var string
     */
    private $count_sql = '';

    /**
     * The number of pages (when pagination is enabled).
     *
     * @var int
     */
    private $max_num_pages = 0;

    /**
     * The number of orders found.
     *
     * @var int
     */
    private $found_orders = 0;

    /**
     * Field query parser.
     *
     * @var OrdersTableFieldQuery
     */
    private $field_query = null;

    /**
     * Meta query parser.
     *
     * @var OrdersTableMetaQuery
     */
    private $meta_query = null;

    /**
     * Search query parser.
     *
     * @var OrdersTableSearchQuery?
     */
    private $search_query = null;

    /**
     * Date query parser.
     *
     * @var WP_Date_Query
     */
    private $date_query = null;

    /**
     * Instance of the OrdersTableDataStore class.
     *
     * @var OrdersTableDataStore
     */
    private $order_datastore = null;

    /**
     * Whether to run filters to modify the query or not.
     *
     * @var boolean
     */
    private $suppress_filters = false;

    /**
     * Sets up and runs the query after processing arguments.
     *
     * @param array $args Array of query vars.
     */
    public function __construct($args = array (
))
    {
        // stub
    }

    /**
     * Lets the `woocommerce_hpos_pre_query` filter override the query.
     *
     * @return boolean Whether the query was overridden or not.
     */
    private function maybe_override_query(): bool
    {
        // stub
    }

    /**
     * Remaps some legacy and `WP_Query` specific query vars to vars available in the customer order table scheme.
     *
     * @return void
     */
    private function maybe_remap_args(): void
    {
        // stub
    }

    /**
     * Generates a `WP_Date_Query` compatible query from a given date.
     * YYYY-MM-DD queries have 'day' precision for backwards compatibility.
     *
     * @param mixed $date The date. Can be a {@see \WC_DateTime}, a timestamp or a string.
     * @return array An array with keys 'year', 'month', 'day' and possibly 'hour', 'minute' and 'second'.
     */
    private function date_to_date_query_arg($date): array
    {
        // stub
    }

    /**
     * Returns UTC-based date query arguments for a combination of local time dates and a date shorthand operator.
     *
     * @param  array  $dates_raw Array of dates (in local time) to use in combination with the operator.
     * @param  string $operator One of the operators supported by date queries (<, <=, =, ..., >, >=).
     * @return array Partial date query arg with relevant dates now UTC-based.
     *
     * @throws \Exception If an invalid date shorthand operator is specified.
     *
     * @since 8.2.0
     */
    private function local_time_to_gmt_date_query($dates_raw, $operator)
    {
        // stub
    }

    /**
     * Processes date-related query args and merges the result into 'date_query'.
     *
     * @return void
     * @throws \Exception When date args are invalid.
     */
    private function process_date_args(): void
    {
        // stub
    }

    /**
     * Helper function to map posts and gmt based keys to HPOS keys.
     *
     * @param array $query Date query argument.
     *
     * @return array|mixed Date query argument with modified keys.
     */
    private function map_gmt_and_post_keys_to_hpos_keys($query)
    {
        // stub
    }

    /**
     * Makes sure all 'date_query' columns are correctly prefixed and their respective tables are being JOIN'ed.
     *
     * @return void
     */
    private function process_date_query_columns()
    {
        // stub
    }

    /**
     * Sanitizes the 'status' query var.
     *
     * @return void
     */
    private function sanitize_status(): void
    {
        // stub
    }

    /**
     * Parses and sanitizes the 'orderby' query var.
     *
     * @return void
     */
    private function sanitize_order_orderby(): void
    {
        // stub
    }

    /**
     * Makes sure the order in an ORDER BY statement is either 'ASC' o 'DESC'.
     *
     * @param string $order The unsanitized order.
     * @return string The sanitized order.
     */
    private function sanitize_order(string $order): string
    {
        // stub
    }

    /**
     * Builds the final SQL query to be run.
     *
     * @return void
     */
    private function build_query(): void
    {
        // stub
    }

    /**
     * Build SQL query for counting total number of results.
     *
     * @param string $fields Prepared fields for SELECT clause.
     * @param string $join Prepared JOIN clause.
     * @param string $where Prepared WHERE clause.
     * @param string $groupby Prepared GROUP BY clause.
     */
    private function build_count_query($fields, $join, $where, $groupby)
    {
        // stub
    }

    /**
     * Returns the table alias for a given table mapping.
     *
     * @param string $mapping_id The mapping name (e.g. 'orders' or 'operational_data').
     * @return string Table alias.
     *
     * @since 7.0.0
     */
    public function get_core_mapping_alias(string $mapping_id): string
    {
        // stub
    }

    /**
     * Returns an SQL JOIN clause that can be used to join the main orders table with another order table.
     *
     * @param string $mapping_id The mapping name (e.g. 'orders' or 'operational_data').
     * @return string The JOIN clause.
     *
     * @since 7.0.0
     */
    public function get_core_mapping_join(string $mapping_id): string
    {
        // stub
    }

    /**
     * JOINs the main orders table with another table.
     *
     * @param string  $table      Table name (including prefix).
     * @param string  $alias      Table alias to use. Defaults to $table.
     * @param string  $on         ON clause. Defaults to "wc_orders.id = {$alias}.order_id".
     * @param string  $join_type  JOIN type: LEFT, RIGHT or INNER.
     * @param boolean $alias_once If TRUE, table won't be JOIN'ed again if already JOIN'ed.
     * @return void
     * @throws \Exception When an error occurs, such as trying to re-use an alias with $alias_once = FALSE.
     */
    private function join(string $table, string $alias = '', string $on = '', string $join_type = 'inner', bool $alias_once = false)
    {
        // stub
    }

    /**
     * Generates a properly escaped and sanitized WHERE condition for a given field.
     *
     * @param string $table    The table the field belongs to.
     * @param string $field    The field or column name.
     * @param string $operator The operator to use in the condition. Defaults to '=' or 'IN' depending on $value.
     * @param mixed  $value    The value.
     * @param string $type     The column type as specified in {@see OrdersTableDataStore} column mappings.
     * @return string The resulting WHERE condition.
     */
    public function where(string $table, string $field, string $operator, $value, string $type): string
    {
        // stub
    }

    /**
     * Processes fields related to the orders table.
     *
     * @return void
     */
    private function process_orders_table_query_args(): void
    {
        // stub
    }

    /**
     * Generate SQL conditions for the 'customer' query.
     *
     * @param array  $values   List of customer ids or emails.
     * @param string $relation 'OR' or 'AND' relation used to build the customer query.
     * @return string SQL to be used in a WHERE clause.
     */
    private function generate_customer_query($values, string $relation = 'OR'): string
    {
        // stub
    }

    /**
     * Processes fields related to the operational data table.
     *
     * @return void
     */
    private function process_operational_data_table_query_args(): void
    {
        // stub
    }

    /**
     * Processes fields related to the addresses table.
     *
     * @return void
     */
    private function process_addresses_table_query_args(): void
    {
        // stub
    }

    /**
     * Generates the ORDER BY clause.
     *
     * @return void
     */
    private function process_orderby(): void
    {
        // stub
    }

    /**
     * Generates the limits to be used in the LIMIT clause.
     *
     * @return void
     */
    private function process_limit(): void
    {
        // stub
    }

    /**
     * Checks if a query var is set (i.e. not one of the "skipped values").
     *
     * @param string $arg_key Query var.
     * @return bool TRUE if query var is set.
     */
    public function arg_isset(string $arg_key): bool
    {
        // stub
    }

    /**
     * Runs the SQL query.
     *
     * @return void
     */
    private function run_query(): void
    {
        // stub
    }

    /**
     * Make some private available for backwards compatibility.
     *
     * @param string $name Property to get.
     * @return mixed
     */
    public function __get(string $name)
    {
        // stub
    }

    /**
     * Returns the value of one of the query arguments.
     *
     * @param string $arg_name Query var.
     * @return mixed
     */
    public function get(string $arg_name)
    {
        // stub
    }

    /**
     * Returns the name of one of the OrdersTableDatastore tables.
     *
     * @param string $table_id Table identifier. One of 'orders', 'operational_data', 'addresses', 'meta'.
     * @return string The prefixed table name.
     * @throws \Exception When table ID is not found.
     */
    public function get_table_name(string $table_id = ''): string
    {
        // stub
    }

    /**
     * Finds table and mapping information about a field or column.
     *
     * @param string $field Field to look for in `<mapping|field_name>.<column|field_name>` format or just `<field_name>`.
     * @return false|array {
     *     @type string $table      Full table name where the field is located.
     *     @type string $mapping_id Unprefixed table or mapping name.
     *     @type string $field_name Name of the corresponding order field.
     *     @type string $column     Column in $table that corresponds to the field.
     *     @type string $type       Field type.
     * }
     */
    public function get_field_mapping_info($field)
    {
        // stub
    }

}

