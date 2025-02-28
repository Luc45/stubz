<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Manage_Orders_On_The_Go
 */
class ManageOrdersOnTheGo
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-manage-orders-on-the-go';
    /**
     * Get the note.
     *
     * @return Note|null
     */
    public static function get_note()
    {
    }
}