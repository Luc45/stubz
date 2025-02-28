<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * NoteTraits class.
 */
trait NoteTraits
{
    /**
     * Test how long WooCommerce Admin has been active.
     *
     * @param int $seconds Time in seconds to check.
     * @return bool Whether or not WooCommerce admin has been active for $seconds.
     */
    private static function wc_admin_active_for($seconds)
    {
    }
    /**
     * Test if WooCommerce Admin has been active within a pre-defined range.
     *
     * @param string $range range available in WC_ADMIN_STORE_AGE_RANGES.
     * @param int    $custom_start custom start in range.
     * @return bool Whether or not WooCommerce admin has been active within the range.
     */
    private static function is_wc_admin_active_in_date_range($range, $custom_start = null)
    {
    }
    /**
     * Check if the note has been previously added.
     *
     * @throws NotesUnavailableException Throws exception when notes are unavailable.
     */
    public static function note_exists()
    {
    }
    /**
     * Checks if a note can and should be added.
     *
     * @return bool
     * @throws NotesUnavailableException Throws exception when notes are unavailable.
     */
    public static function can_be_added()
    {
    }
    /**
     * Add the note if it passes predefined conditions.
     *
     * @throws NotesUnavailableException Throws exception when notes are unavailable.
     */
    public static function possibly_add_note()
    {
    }
    /**
     * Alias this method for backwards compatibility.
     *
     * @throws NotesUnavailableException Throws exception when notes are unavailable.
     */
    public static function add_note()
    {
    }
    /**
     * Should this note exist? (Default implementation is generous. Override as needed.)
     */
    public static function is_applicable()
    {
    }
    /**
     * Delete this note if it is not applicable, unless has been soft-deleted or actioned already.
     */
    public static function delete_if_not_applicable()
    {
    }
    /**
     * Possibly delete the note, if it exists in the database. Note that this
     * is a hard delete, for where it doesn't make sense to soft delete or
     * action the note.
     *
     * @throws NotesUnavailableException Throws exception when notes are unavailable.
     */
    public static function possibly_delete_note()
    {
    }
    /**
     * Update the note if it passes predefined conditions.
     *
     * @throws NotesUnavailableException Throws exception when notes are unavailable.
     */
    public static function possibly_update_note()
    {
    }
    /**
     * Get if the note has been actioned.
     *
     * @return bool
     * @throws NotesUnavailableException Throws exception when notes are unavailable.
     */
    public static function has_note_been_actioned()
    {
    }
    /**
     * Update a note field of note1 if it's different from note2 with getter and setter.
     *
     * @param Note   $note1 Note to update.
     * @param Note   $note2 Note to compare against.
     * @param string $field_name Field to update.
     * @return bool True if the field was updated.
     */
    private static function update_note_field_if_changed($note1, $note2, $field_name)
    {
    }
    /**
     * Convert a value to array if it's a stdClass.
     *
     * @param mixed $obj variable to convert.
     * @return mixed
     */
    private static function possibly_convert_object_to_array($obj)
    {
    }
}