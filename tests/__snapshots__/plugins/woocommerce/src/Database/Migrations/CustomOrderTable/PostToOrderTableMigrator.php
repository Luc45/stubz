<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Helper class to migrate records from the WordPress post table
 * to the custom order table (and only that table - PostsToOrdersMigrationController
 * is used for fully migrating orders).
 */
class PostToOrderTableMigrator
{
    /**
     * Get schema config for wp_posts and wc_order table.
     *
     * @return array Config.
     */
    protected function get_schema_config(): array
    {
        // stub
    }

    /**
     * Get columns config.
     *
     * @return \string[][] Config.
     */
    protected function get_core_column_mapping(): array
    {
        // stub
    }

    /**
     * Get meta data config.
     *
     * @return \string[][] Config.
     */
    public function get_meta_column_config(): array
    {
        // stub
    }

}