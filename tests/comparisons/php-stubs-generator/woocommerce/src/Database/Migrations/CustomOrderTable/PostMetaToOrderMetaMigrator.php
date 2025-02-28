<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Helper class to migrate records from the WordPress post meta table
 * to the custom orders meta table.
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
class PostMetaToOrderMetaMigrator extends \Automattic\WooCommerce\Database\Migrations\MetaToMetaTableMigrator
{
    /**
     * PostMetaToOrderMetaMigrator constructor.
     *
     * @param array $excluded_columns List of meta keys to exclude from migration.
     */
    public function __construct($excluded_columns)
    {
    }
    /**
     * Generate config for meta data migration.
     *
     * @return array Meta data migration config.
     */
    protected function get_meta_config(): array
    {
    }
}
