<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * EU_VAT_Number
 */
class EUVATNumber
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-eu-vat-number';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}