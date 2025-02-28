<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Launch_Checklist
 */
class LaunchChecklist
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;

    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-launch-checklist';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}
