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
    protected $schema_config;
    /**
     * Meta config, see __construct for detailed config.
     *
     * @var array
     */
    protected $meta_column_mapping;
    /**
     * Column mapping from source table to destination custom table. See __construct for detailed config.
     *
     * @var array
     */
    protected $core_column_mapping;
    /**
     * MetaToCustomTableMigrator constructor.
     */
    public function __construct()
    {
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
    protected abstract function get_schema_config() : array;
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
    protected abstract function get_core_column_mapping() : array;
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
    protected abstract function get_meta_column_config() : array;
    /**
     * Return data to be migrated for a batch of entities.
     *
     * @param array $entity_ids Ids of entities to migrate.
     *
     * @return array[] Data to be migrated. Would be of the form: array( 'data' => array( ... ), 'errors' => array( ... ) ).
     */
    public function fetch_sanitized_migration_data($entity_ids)
    {
    }
    /**
     * Migrate a batch of entities from the posts table to the corresponding table.
     *
     * @param array $entity_ids Ids of entities to migrate.
     *
     * @return void
     */
    protected function process_migration_batch_for_ids_core(array $entity_ids) : void
    {
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
    protected function get_already_existing_records(array $entity_ids) : array
    {
    }
    /**
     * Get additional string to be appended to the WHERE clause of the SQL query used by get_data_to_insert_or_update.
     *
     * @param array $entity_ids The ids of the entities being inserted or updated.
     * @return string Additional string for the WHERE clause, must either be empty or start with "AND" or "OR".
     */
    protected function get_additional_where_clause_for_get_data_to_insert_or_update(array $entity_ids) : string
    {
    }
    /**
     * Verify whether data was migrated properly for given IDs.
     *
     * @param array $source_ids List of source IDs.
     *
     * @return array List of IDs along with columns that failed to migrate.
     */
    public function verify_migrated_data(array $source_ids) : array
    {
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
    }
}