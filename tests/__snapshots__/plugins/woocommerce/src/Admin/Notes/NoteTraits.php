<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * NoteTraits class.
 */
trait NoteTraits
{
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
}