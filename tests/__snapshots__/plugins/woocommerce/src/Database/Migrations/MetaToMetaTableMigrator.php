<?php

namespace Automattic\WooCommerce\Database\Migrations;

/**
 * Base class for implementing migrations from the standard WordPress meta table
 * to custom meta (key-value pairs) tables.
 *
 * @package Automattic\WooCommerce\Database\Migrations
 */
abstract class MetaToMetaTableMigrator
{
    /**
     * Schema config, see __construct for more details.
     *
     * @var array
     */
    private $schema_config = null;

    /**
     * Returns config for the migration.
     *
     * @return array Meta config, must be in following format:
     * array(
     *  'source'      => array(
     *      'meta'          => array(
     *          'table_name'        => source_meta_table_name,
     *          'entity_id_column'  => entity_id column name in source meta table,
     *          'meta_key_column'   => meta_key column',
     *          'meta_value_column' => meta_value column',
     *      ),
     *      'entity' => array(
     *          'table_name'       => entity table name for the meta table,
     *          'source_id_column' => column name in entity table which maps to meta table,
     *          'id_column'        => id column in entity table,
     *      ),
     *      'excluded_keys' => array of keys to exclude,
     *  ),
     *  'destination' => array(
     *      'meta'   => array(
     *          'table_name'        => destination meta table name,
     *          'entity_id_column'  => entity_id column in meta table,
     *          'meta_key_column'   => meta key column,
     *          'meta_value_column' => meta_value column,
     *          'entity_id_type'    => data type of entity id,
     *          'meta_id_column'    => id column in meta table,
     *      ),
     *  ),
     * )
     */
    abstract protected function get_meta_config(): array;
    /**
     * MetaToMetaTableMigrator constructor.
     */
    public function __construct()
{
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
}
    /**
     * Migrate a batch of entities from the posts table to the corresponding table.
     *
     * @param array $entity_ids Ids of entities ro migrate.
     */
    protected function process_migration_batch_for_ids_core(array $entity_ids): void
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
     * Generate update SQL for given batch.
     *
     * @param array $batch List of data to generate update SQL for. Should be in same format as output of $this->fetch_data_for_migration_for_ids.
     *
     * @return string Query to update batch records.
     */
    private function generate_update_sql_for_batch(array $batch): string
{
}
    /**
     * Generate insert sql queries for batches.
     *
     * @param array $batch Data to generate queries for.
     *
     * @return string Insert SQL query.
     */
    private function generate_insert_sql_for_batch(array $batch): string
{
}
    /**
     * Fetch data for migration.
     *
     * @param array $entity_ids Array of IDs to fetch data for.
     *
     * @return array[] Data, will of the form:
     * array(
     *   'id_1' => array( 'column1' => array( value1_1, value1_2...), 'column2' => array(value2_1, value2_2...), ...),
     *   ...,
     * )
     */
    public function fetch_data_for_migration_for_ids(array $entity_ids): array
{
}
    /**
     * Helper method to get already migrated records. Will be used to find prevent migration of already migrated records.
     *
     * @param array $entity_ids List of entity ids to check for.
     *
     * @return array Already migrated records.
     */
    private function get_already_migrated_records(array $entity_ids): array
{
}
    /**
     * Classify each record on whether to migrate or update.
     *
     * @param array $to_migrate Records to migrate.
     * @param array $already_migrated Records already migrated.
     *
     * @return array[] Returns two arrays, first for records to migrate, and second for records to upgrade.
     */
    private function classify_update_insert_records(array $to_migrate, array $already_migrated): array
{
}
    /**
     * Helper method to build query used to fetch data from source meta table.
     *
     * @param array $entity_ids List of entity IDs to build meta query for.
     *
     * @return string Query that can be used to fetch data.
     */
    private function build_meta_table_query(array $entity_ids): string
{
}
}