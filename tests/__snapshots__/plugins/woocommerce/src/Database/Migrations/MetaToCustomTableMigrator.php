<?php

namespace Automattic\WooCommerce\Database\Migrations;

/**
 * Base class for implementing migrations from the standard WordPress meta table
 * to custom structured tables.
 *
 * @package Automattic\WooCommerce\Database\Migrations
 */
abstract class MetaToCustomTableMigrator extends \Automattic\WooCommerce\Database\Migrations\TableMigrator
{
    /**
     * Config for tables being migrated and migrated from. See __construct() for detailed config.
     *
     * @var array
     */
    protected $schema_config = null;

    /**
     * Meta config, see __construct for detailed config.
     *
     * @var array
     */
    protected $meta_column_mapping = null;

    /**
     * Column mapping from source table to destination custom table. See __construct for detailed config.
     *
     * @var array
     */
    protected $core_column_mapping = null;

    /**
     * MetaToCustomTableMigrator constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
    * Specify schema config the source and destination table.
    *
    * @return array Schema, must of the form:
    * array(
    		'source' => array(
    			'entity' => array(
    				'table_name' => $source_table_name,
    				'meta_rel_column' => $column_meta, Name of column in source table which is referenced by meta table.
    				'destination_rel_column' => $column_dest, Name of column in source table which is refenced by destination table,
    				'primary_key' => $primary_key, Primary key of the source table
    			),
    			'meta' => array(
    				'table' => $meta_table_name,
    				'meta_key_column' => $meta_key_column_name,
    				'meta_value_column' => $meta_value_column_name,
    				'entity_id_column' => $entity_id_column, Name of the column having entity IDs.
    			),
    		),
    		'destination' => array(
    			'table_name' => $table_name, Name of destination table,
    			'source_rel_column' => $column_source_id, Name of the column in destination table which is referenced by source table.
    			'primary_key' => $table_primary_key,
    			'primary_key_type' => $type bool|int|string|decimal
    		)
    */
    protected abstract function get_schema_config(): array;

    /**
     * Specify column config from the source table.
     *
     * @return array Config, must be of the form:
     * array(
     *  '$source_column_name_1' => array( // $source_column_name_1 is column name in source table, or a select statement.
     *      'type' => 'type of value, could be string/int/date/float.',
     *      'destination' => 'name of the column in column name where this data should be inserted in.',
     *  ),
     *  '$source_column_name_2' => array(
     *          ......
     *  ),
     *  ....
     * ).
     */
    protected abstract function get_core_column_mapping(): array;

    /**
     * Specify meta keys config from source meta table.
     *
     * @return array Config, must be of the form.
     * array(
     *  '$meta_key_1' => array(  // $meta_key_1 is the name of meta_key in source meta table.
     *          'type' => 'type of value, could be string/int/date/float',
     *          'destination' => 'name of the column in column name where this data should be inserted in.',
     *  ),
     *  '$meta_key_2' => array(
     *          ......
     *  ),
     *  ....
     * ).
     */
    protected abstract function get_meta_column_config(): array;

    /**
     * Generate SQL for data insertion.
     *
     * @param array $batch Data to generate queries for. Will be 'data' array returned by `$this->fetch_data_for_migration_for_ids()` method.
     *
     * @return string Generated queries for insertion for this batch, would be of the form:
     * INSERT IGNORE INTO $table_name ($columns) values
     *  ($value for row 1)
     *  ($value for row 2)
     * ...
     */
    private function generate_insert_sql_for_batch(array $batch): string
    {
        // stub
    }

    /**
     * Generate SQL for data updating.
     *
     * @param array $batch Data to generate queries for. Will be `data` array returned by fetch_data_for_migration_for_ids() method.
     *
     * @param array $entity_row_mapping Maps rows to update data with their original IDs. Will be returned by `generate_update_sql_for_batch`.
     *
     * @return string Generated queries for batch update. Would be of the form:
     * INSERT INTO $table ( $columns ) VALUES
     *  ($value for row 1)
     *  ($value for row 2)
     * ...
     * ON DUPLICATE KEY UPDATE
     * $column1 = VALUES($column1)
     * $column2 = VALUES($column2)
     * ...
     */
    private function generate_update_sql_for_batch(array $batch, array $entity_row_mapping): string
    {
        // stub
    }

    /**
     * Generate schema for primary ID column of destination table.
     *
     * @return array[] Schema for primary ID column.
     */
    private function get_destination_table_primary_id_schema(): array
    {
        // stub
    }

    /**
     * Generate values and columns clauses to be used in INSERT and INSERT..ON DUPLICATE KEY UPDATE statements.
     *
     * @param array $columns_schema Columns config for destination table.
     * @param array $batch Actual data to migrate as returned by `data` in `fetch_data_for_migration_for_ids` method.
     *
     * @return array SQL clause for values, columns placeholders, and columns.
     */
    private function generate_column_clauses(array $columns_schema, array $batch): array
    {
        // stub
    }

    /**
     * Return data to be migrated for a batch of entities.
     *
     * @param array $entity_ids Ids of entities to migrate.
     *
     * @return array[] Data to be migrated. Would be of the form: array( 'data' => array( ... ), 'errors' => array( ... ) ).
     */
    public function fetch_sanitized_migration_data($entity_ids)
    {
        // stub
    }

    /**
     * Migrate a batch of entities from the posts table to the corresponding table.
     *
     * @param array $entity_ids Ids of entities to migrate.
     *
     * @return void
     */
    protected function process_migration_batch_for_ids_core(array $entity_ids): void
    {
        // stub
    }

    /**
     * Process migration data for a batch of entities.
     *
     * @param array $data Data to be migrated. Should be of the form: array( 'data' => array( ... ) ) as returned by the `fetch_sanitized_migration_data` method.
     *
     * @return array Array of errors and exception if any.
     */
    public function process_migration_data(array $data)
    {
        // stub
    }

    /**
     * Process batch for insertion into destination table.
     *
     * @param array $batch Data to insert, will be of the form as returned by `data` in `fetch_data_for_migration_for_ids`.
     */
    private function process_insert_batch(array $batch): void
    {
        // stub
    }

    /**
     * Process batch for update into destination table.
     *
     * @param array $batch Data to insert, will be of the form as returned by `data` in `fetch_data_for_migration_for_ids`.
     * @param array $ids_mapping Maps rows to update data with their original IDs.
     */
    private function process_update_batch(array $batch, array $ids_mapping): void
    {
        // stub
    }

    /**
     * Fetch data for migration.
     *
     * @param array $entity_ids Entity IDs to fetch data for.
     *
     * @return array[] Data along with errors (if any), will of the form:
     * array(
     *  'data' => array(
     *      'id_1' => array( 'column1' => value1, 'column2' => value2, ...),
     *      ...,
     *   ),
     *  'errors' => array(
     *      'id_1' => array( 'column1' => error1, 'column2' => value2, ...),
     *      ...,
     * )
     */
    private function fetch_data_for_migration_for_ids(array $entity_ids): array
    {
        // stub
    }

    /**
     * Fetch id mappings for records that are already inserted in the destination table.
     *
     * @param array $entity_ids List of entity IDs to verify.
     *
     * @return array Already migrated entities, would be of the form
     * array(
     *      '$source_id1' => array(
     *          'source_id' => $source_id1,
     *          'destination_id' => $destination_id1
     *          'modified' => 0 if it can be determined that the row doesn't need update, 1 otherwise
     *      ),
     *      ...
     * )
     */
    protected function get_already_existing_records(array $entity_ids): array
    {
        // stub
    }

    /**
     * Get additional string to be appended to the WHERE clause of the SQL query used by get_data_to_insert_or_update.
     *
     * @param array $entity_ids The ids of the entities being inserted or updated.
     * @return string Additional string for the WHERE clause, must either be empty or start with "AND" or "OR".
     */
    protected function get_additional_where_clause_for_get_data_to_insert_or_update(array $entity_ids): string
    {
        // stub
    }

    /**
     * Helper method to build query used to fetch data from core source table.
     *
     * @param array $entity_ids List of entity IDs to fetch.
     *
     * @return string Query that can be used to fetch data.
     */
    private function build_entity_table_query(array $entity_ids): string
    {
        // stub
    }

    /**
     * Helper method to build query that will be used to fetch data from source meta table.
     *
     * @param array $entity_ids List of IDs to fetch metadata for.
     *
     * @return string Query for fetching meta data.
     */
    private function build_meta_data_query(array $entity_ids): string
    {
        // stub
    }

    /**
     * Helper function to validate and combine data before we try to insert.
     *
     * @param array $entity_data Data from source table.
     * @param array $meta_data Data from meta table.
     *
     * @return array[] Validated and combined data with errors.
     */
    private function process_and_sanitize_data(array $entity_data, array $meta_data): array
    {
        // stub
    }

    /**
     * Helper method to sanitize core source table.
     *
     * @param array $sanitized_entity_data Array containing sanitized data for insertion.
     * @param array $error_records Error records.
     * @param array $entity_data Original source data.
     */
    private function process_and_sanitize_entity_data(array &$sanitized_entity_data, array &$error_records, array $entity_data): void
    {
        // stub
    }

    /**
     * Helper method to sanitize soure meta data.
     *
     * @param array $sanitized_entity_data Array containing sanitized data for insertion.
     * @param array $error_records Error records.
     * @param array $meta_data Original source data.
     */
    private function processs_and_sanitize_meta_data(array &$sanitized_entity_data, array &$error_records, array $meta_data): void
    {
        // stub
    }

    /**
     * Validate and transform data so that we catch as many errors as possible before inserting.
     *
     * @param mixed  $value Actual data value.
     * @param string $type Type of data, could be decimal, int, date, string.
     *
     * @return float|int|mixed|string|\WP_Error
     */
    private function validate_data($value, string $type)
    {
        // stub
    }

    /**
     * Verify whether data was migrated properly for given IDs.
     *
     * @param array $source_ids List of source IDs.
     *
     * @return array List of IDs along with columns that failed to migrate.
     */
    public function verify_migrated_data(array $source_ids): array
    {
        // stub
    }

    /**
     * Generate query to fetch data from both source and destination tables. Use the results in `verify_data` to verify if data was migrated properly.
     *
     * @param array $source_ids Array of IDs in source table.
     *
     * @return string SELECT statement.
     */
    protected function build_verification_query($source_ids)
    {
        // stub
    }

    /**
     * Fill source metadata for given IDs for verification. This will return filled data in following format:
     * [
     *    {
     *      $source_table_$source_column: $value,
     *      ...,
     *      $destination_table_$destination_column: $value,
     *      ...
     *      meta_source_{$destination_column_name1}: $meta_value,
     *      ...
     *    },
     *   ...
     * ]
     *
     * @param array $results    Entity data from both source and destination table.
     * @param array $source_ids List of source IDs.
     *
     * @return array Filled $results param with source metadata.
     */
    private function fill_source_metadata($results, $source_ids)
    {
        // stub
    }

    /**
     * Helper function to generate where clause for fetching data for verification.
     *
     * @param array $source_ids Array of IDs from source table.
     *
     * @return string WHERE clause.
     */
    protected function get_where_clause_for_verification($source_ids)
    {
        // stub
    }

    /**
     * Verify data from both source and destination tables and check if they were migrated properly.
     *
     * @param array $collected_data Collected data in array format, should be in same structure as returned from query in `$this->build_verification_query`.
     *
     * @return array Array of failed IDs if any, along with columns/meta_key names.
     */
    protected function verify_data($collected_data)
    {
        // stub
    }

    /**
     * Helper method to verify and compare core columns.
     *
     * @param array $row        Both migrated and source data for a single row.
     * @param array $failed_ids Array of failed IDs.
     *
     * @return array Array of failed IDs if any, along with columns/meta_key names.
     */
    private function verify_entity_columns($row, $failed_ids)
    {
        // stub
    }

    /**
     * Helper method to verify meta columns.
     *
     * @param array $row        Both migrated and source data for a single row.
     * @param array $failed_ids Array of failed IDs.
     *
     * @return array Array of failed IDs if any, along with columns/meta_key names.
     */
    private function verify_meta_columns($row, $failed_ids)
    {
        // stub
    }

    /**
     * Helper method to pre-process rows to make sure we parse the correct type.
     *
     * @param array  $row Both migrated and source data for a single row.
     * @param array  $schema Column schema.
     * @param string $alias Name of source column.
     * @param string $destination_alias Name of destination column.
     *
     * @return array Processed row.
     */
    private function pre_process_row($row, $schema, $alias, $destination_alias)
    {
        // stub
    }

    /**
     * Helper method to get default value of a type.
     *
     * @param string $type Type.
     *
     * @return mixed Default value.
     */
    private function get_type_defaults($type)
    {
        // stub
    }

}

