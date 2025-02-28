<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Performance_On_Mobile
 */
class PerformanceOnMobile
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-performance-on-mobile';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}