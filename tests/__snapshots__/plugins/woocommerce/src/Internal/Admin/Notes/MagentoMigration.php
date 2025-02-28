<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * MagentoMigration
 */
class MagentoMigration
{
    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-magento-migration';
    /**
     * Attach hooks.
     */
    public function __construct()
{
}
    /**
     * Add the note if it passes predefined conditions.
     */
    public static function possibly_add_note()
{
}
    /**
     * Save the note to the database.
     */
    public static function save_note()
{
}
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
{
}
}