<?php

namespace Automattic\WooCommerce\Database\Migrations;

/**
 * Base class for implementing migrations from the standard WordPress meta table
 * to custom meta (key-value pairs) tables.
 *
 * @package Automattic\WooCommerce\Database\Migrations
 */
abstract class MetaToMetaTableMigrator extends \Automattic\WooCommerce\Database\Migrations\TableMigrator
{
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
}