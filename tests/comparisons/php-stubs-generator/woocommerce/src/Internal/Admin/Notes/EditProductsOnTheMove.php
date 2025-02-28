<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Edit_Products_On_The_Move
 */
class EditProductsOnTheMove
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-edit-products-on-the-move';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}