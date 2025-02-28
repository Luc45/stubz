<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * A class of utilities for dealing with the database.
 */
class DatabaseUtil
{
    /**
     * Wrapper for the WordPress dbDelta function, allows to execute a series of SQL queries.
     *
     * @param string $queries The SQL queries to execute.
     * @param bool   $execute Ture to actually execute the queries, false to only simulate the execution.
     * @return array The result of the execution (or simulation) from dbDelta.
     */
    public function dbdelta(string $queries = '', bool $execute = true): array
    {
    }
    /**
     * Given a set of table creation SQL statements, check which of the tables are currently missing in the database.
     *
     * @param string $creation_queries The SQL queries to execute ("CREATE TABLE" statements, same format as for dbDelta).
     * @return array An array containing the names of the tables that currently don't exist in the database.
     */
    public function get_missing_tables(string $creation_queries): array
    {
    }
    /**
     * Parses the output given by dbdelta and returns information about it.
     *
     * @param array $dbdelta_output The output from the execution of dbdelta.
     * @return array[] An array containing a 'created_tables' key whose value is an array with the names of the tables that have been (or would have been) created.
     */
    public function parse_dbdelta_output(array $dbdelta_output): array
    {
    }
    /**
     * Drops a database table.
     *
     * @param string $table_name The name of the table to drop.
     * @param bool   $add_prefix True if the table name passed needs to be prefixed with $wpdb->prefix before processing.
     * @return bool True on success, false on error.
     */
    public function drop_database_table(string $table_name, bool $add_prefix = false)
    {
    }
    /**
     * Drops a table index, if both the table and the index exist.
     *
     * @param string $table_name The name of the table that contains the index.
     * @param string $index_name The name of the index to be dropped.
     * @return bool True if the index has been dropped, false if either the table or the index don't exist.
     */
    public function drop_table_index(string $table_name, string $index_name): bool
    {
    }
    /**
     * Create a primary key for a table, only if the table doesn't have a primary key already.
     *
     * @param string $table_name Table name.
     * @param array  $columns An array with the index column names.
     * @return bool True if the key has been created, false if the table already had a primary key.
     */
    public function create_primary_key(string $table_name, array $columns)
    {
    }
    /**
     * Get the columns of a given table index, or of the primary key.
     *
     * @param string $table_name Table name.
     * @param string $index_name Index name, empty string for the primary key.
     * @return array The index columns. Empty array if the table or the index don't exist.
     */
    public function get_index_columns(string $table_name, string $index_name = ''): array
    {
    }
    /**
     * Formats an object value of type `$type` for inclusion in the database.
     *
     * @param mixed  $value Raw value.
     * @param string $type  Data type.
     * @return mixed
     * @throws \Exception When an invalid type is passed.
     */
    public function format_object_value_for_db($value, string $type)
    {
    }
    /**
     * Returns the `$wpdb` placeholder to use for data type `$type`.
     *
     * @param string $type Data type.
     * @return string
     * @throws \Exception When an invalid type is passed.
     */
    public function get_wpdb_format_for_type(string $type)
    {
    }
    /**
     * Generates ON DUPLICATE KEY UPDATE clause to be used in migration.
     *
     * @param array $columns List of column names.
     *
     * @return string SQL clause for INSERT...ON DUPLICATE KEY UPDATE
     */
    public function generate_on_duplicate_statement_clause(array $columns): string
    {
    }
    /**
     * Hybrid of $wpdb->update and $wpdb->insert. It will try to update a row, and if it doesn't exist, it will insert it. This needs unique constraints to be set on the table on all ID columns.
     *
     * You can use this function only when:
     * 1. There is only one unique constraint on the table. The constraint can contain multiple columns, but it must be the only one unique constraint.
     * 2. The complete unique constraint must be part of the $data array.
     * 3. You do not need the LAST_INSERT_ID() value.
     *
     * @param string $table_name Table name.
     * @param array  $data Unescaped data to update (in column => value pairs).
     * @param array  $format An array of formats to be mapped to each of the values in $data.
     *
     * @return int Returns the value of DB's  ON DUPLICATE KEY UPDATE clause.
     */
    public function insert_on_duplicate_key_update($table_name, $data, $format): int
    {
    }
    /**
     * Hybrid of $wpdb->update and $wpdb->insert. It will try to update a row, and if it doesn't exist, it will insert it. Unlike `insert_on_duplicate_key_update` it does not require a unique constraint, but also does not guarantee uniqueness on its own.
     *
     * When a unique constraint is present, it will perform better than the `insert_on_duplicate_key_update` since it needs fewer locks.
     *
     * Note that it will only update at max just 1 database row, unlike `wpdb->update` which updates everything that matches the `$where` criteria. This is also why it needs a primary_key_column.
     *
     * @param string $table_name Table Name.
     * @param array  $data Data to insert update in array($column_name => $value) format.
     * @param array  $where Update conditions in array($column_name => $value) format. Conditions will be joined by AND.
     * @param array  $format Format strings for data. Unlike $wpdb->update/insert, this method won't guess the format, and has to be provided explicitly.
     * @param array  $where_format Format strings for where conditions. Unlike $wpdb->update/insert, this method won't guess the format, and has to be provided explicitly.
     * @param string $primary_key_column Name of the Primary key column.
     * @param string $primary_key_format Format for primary key.
     *
     * @return bool|int Number of rows affected. Boolean false on error.
     */
    public function insert_or_update($table_name, $data, $where, $format, $where_format, $primary_key_column = 'id', $primary_key_format = '%d')
    {
    }
    /**
     * Get max index length.
     *
     * @return int Max index length.
     */
    public function get_max_index_length(): int
    {
    }
    /**
     * Create a fulltext index on order address table.
     *
     * @return void
     */
    public function create_fts_index_order_address_table(): void
    {
    }
    /**
     * Helper method to drop the fulltext index on order address table.
     *
     * @since 9.4.0
     *
     * @return void
     */
    public function drop_fts_index_order_address_table(): void
    {
    }
    /**
     * Sanitize FTS Search params to remove relevancy operators for performance, and add partial matches. Useful when the sorting is already happening based on some other conditions, so relevancy calculation is not needed.
     *
     * @since 9.4.0
     *
     * @param string $param Search term.
     *
     * @return string Sanitized search term.
     */
    public function sanitise_boolean_fts_search_term(string $param): string
    {
    }
    /**
     * Check if fulltext index with key `order_addresses_fts` on order address table exists.
     *
     * @return bool
     */
    public function fts_index_on_order_address_table_exists(): bool
    {
    }
    /**
     * Create a fulltext index on order item table.
     *
     * @return void
     */
    public function create_fts_index_order_item_table(): void
    {
    }
    /**
     * Check if fulltext index with key `order_item_fts` on order item table exists.
     *
     * @return bool
     */
    public function fts_index_on_order_item_table_exists(): bool
    {
    }
}
