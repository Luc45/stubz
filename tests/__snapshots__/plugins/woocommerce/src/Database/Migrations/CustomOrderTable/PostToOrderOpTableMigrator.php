<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Helper class to migrate records from the WordPress post table
 * to the custom order operations table.
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
class PostToOrderOpTableMigrator extends \Automattic\WooCommerce\Database\Migrations\MetaToCustomTableMigrator
{
    /**
     * Get schema config for wp_posts and wc_order_operational_detail table.
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
}