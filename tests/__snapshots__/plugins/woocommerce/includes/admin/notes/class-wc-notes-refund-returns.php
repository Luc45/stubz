<?php

namespace ;

/**
 * WC_Notes_Refund_Returns.
 */
class WC_Notes_Refund_Returns
{
    const NOTE_NAME = 'wc-refund-returns-page';

    /**
     * Attach hooks.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Maybe add a note to the inbox.
     *
     * @param int $page_id The ID of the page.
     */
    public static function possibly_add_note($page_id)
    {
        // stub
    }

    /**
     * Get the note.
     *
     * @param int $page_id The ID of the page.
     * @return object $note The note object.
     */
    public static function get_note($page_id)
    {
        // stub
    }

    /**
     * Get the note.
     *
     * @param Note $note_from_db The note object from the database.
     * @return Note $note The note object.
     */
    public static function get_note_from_db($note_from_db)
    {
        // stub
    }

}

