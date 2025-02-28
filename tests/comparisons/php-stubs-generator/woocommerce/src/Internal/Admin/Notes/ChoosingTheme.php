<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Giving_Feedback_Notes
 */
class ChoosingTheme
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-choosing-a-theme';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}