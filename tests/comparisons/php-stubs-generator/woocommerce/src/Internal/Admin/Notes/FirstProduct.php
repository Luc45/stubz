<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * First_Product.
 */
class FirstProduct
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-first-product';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}