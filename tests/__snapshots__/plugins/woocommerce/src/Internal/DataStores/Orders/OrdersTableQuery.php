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
    public const SKIPPED_VALUES = array (
  0 => '',
  1 => 
  array(),
  2 => null,
);
    public const REGEX_SHORTHAND_DATES = '/([^.<>]*)(>=|<=|>|<|\\.\\.\\.)([^.<>]+)/';
    private const MYSQL_MAX_UNSIGNED_BIGINT = '18446744073709551615';
    /**
     * Sets up and runs the query after processing arguments.
     *
     * @param array $args Array of query vars.
     */
    public function __construct($args = array())
{
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
}
    /**
     * Checks if a query var is set (i.e. not one of the "skipped values").
     *
     * @param string $arg_key Query var.
     * @return bool TRUE if query var is set.
     */
    public function arg_isset(string $arg_key): bool
{
}
    /**
     * Make some private available for backwards compatibility.
     *
     * @param string $name Property to get.
     * @return mixed
     */
    public function __get(string $name)
{
}
    /**
     * Returns the value of one of the query arguments.
     *
     * @param string $arg_name Query var.
     * @return mixed
     */
    public function get(string $arg_name)
{
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
}
}