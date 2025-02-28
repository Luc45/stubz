<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * PaymentsRemindMeLater
 */
class PaymentsRemindMeLater
{
    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-payments-remind-me-later';
    /**
     * Should this note exist?
     */
    public static function is_applicable()
{
}
    /**
     * Returns true if we should display the note.
     *
     * @return bool
     */
    public static function should_display_note()
{
}
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
{
}
}