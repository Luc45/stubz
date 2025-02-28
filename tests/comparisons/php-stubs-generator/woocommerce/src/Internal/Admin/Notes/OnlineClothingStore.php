<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Online_Clothing_Store.
 */
class OnlineClothingStore
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-online-clothing-store';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}