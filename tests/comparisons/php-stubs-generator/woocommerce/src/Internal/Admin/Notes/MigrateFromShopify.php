<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Migrate_From_Shopify.
 */
class MigrateFromShopify
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-migrate-from-shopify';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}