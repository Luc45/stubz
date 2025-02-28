<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Unsecured_Report_Files
 */
class UnsecuredReportFiles
{
    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-remove-unsecured-report-files';
    /**
     * Get the note.
     *
     * @return Note|null
     */
    public static function get_note()
{
}
    /**
     * Add the note if it passes predefined conditions.
     */
    public static function possibly_add_note()
{
}
    /**
     * Check if the note has been previously added.
     */
    public static function note_exists()
{
}
}