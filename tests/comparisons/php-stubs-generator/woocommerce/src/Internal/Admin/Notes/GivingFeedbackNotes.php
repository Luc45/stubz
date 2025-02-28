<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Giving_Feedback_Notes
 */
class GivingFeedbackNotes
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;

    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-store-notice-giving-feedback-2';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}
