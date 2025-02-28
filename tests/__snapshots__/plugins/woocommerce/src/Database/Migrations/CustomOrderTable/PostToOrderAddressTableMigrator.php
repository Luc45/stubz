<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Helper class to migrate records from the WordPress post table
 * to the custom order addresses table.
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
class PostToOrderAddressTableMigrator
{
    /**
     * Type of addresses being migrated; 'billing' or 'shipping'.
     *
     * @var $type
     */
    protected $type = null;

    /**
     * PostToOrderAddressTableMigrator constructor.
     *
     * @param string $type Type of address being migrated; 'billing' or 'shipping'.
     */
    public function __construct($type)
{
}
    /**
     * Get schema config for wp_posts and wc_order_address table.
     *
     * @return array Config.
     */
    protected function get_schema_config(): array
{
}
    /**
     * Get columns config.
     *
     * @return \string[][] Config.
     */
    protected function get_core_column_mapping(): array
{
}
    /**
     * Get meta data config.
     *
     * @return \string[][] Config.
     */
    public function get_meta_column_config(): array
{
}
    /**
     * Additional WHERE clause to only fetch the addresses of the current type.
     *
     * @param array $entity_ids The ids of the entities being inserted or updated.
     * @return string The additional string for the WHERE clause.
     */
    protected function get_additional_where_clause_for_get_data_to_insert_or_update(array $entity_ids): string
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
}