<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Admin Notes class.
 */
class Notes
{
    const UNSNOOZE_HOOK = 'wc_admin_unsnooze_admin_notes';

    /**
     * Hook appropriate actions.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Get notes from the database.
     *
     * @param string $context Getting notes for what context. Valid values: view, edit.
     * @param array  $args Arguments to pass to the query( e.g. per_page and page).
     * @return array Array of arrays.
     */
    public static function get_notes($context = 'edit', $args = array (
))
    {
        // stub
    }

    /**
     * Get admin note using it's ID
     *
     * @param int $note_id Note ID.
     * @return Note|bool
     */
    public static function get_note($note_id)
    {
        // stub
    }

    /**
     * Get admin note using its name.
     *
     * This is a shortcut for the common pattern of looking up note ids by name and then passing the first id to get_note().
     * It will behave unpredictably when more than one note with the given name exists.
     *
     * @param string $note_name Note name.
     * @return Note|bool
     **/
    public static function get_note_by_name($note_name)
    {
        // stub
    }

    /**
     * Get the total number of notes
     *
     * @param string $type Comma separated list of note types.
     * @param string $status Comma separated list of statuses.
     * @return int
     */
    public static function get_notes_count($type = array (
), $status = array (
))
    {
        // stub
    }

    /**
     * Deletes admin notes with a given name.
     *
     * @param string|array $names Name(s) to search for.
     */
    public static function delete_notes_with_name($names)
    {
        // stub
    }

    /**
     * Update a note.
     *
     * @param Note  $note              The note that will be updated.
     * @param array $requested_updates a list of requested updates.
     */
    public static function update_note($note, $requested_updates)
    {
        // stub
    }

    /**
     * Soft delete of a note.
     *
     * @param Note $note The note that will be deleted.
     */
    public static function delete_note($note)
    {
        // stub
    }

    /**
     * Soft delete of all the admin notes. Returns the deleted items.
     *
     * @param array $args Arguments to pass to the query (ex: status).
     * @return array Array of notes.
     */
    public static function delete_all_notes($args = array (
))
    {
        // stub
    }

    /**
     * Clear note snooze status if the reminder date has been reached.
     */
    public static function unsnooze_notes()
    {
        // stub
    }

    /**
     * Schedule unsnooze notes event.
     */
    public static function schedule_unsnooze_notes()
    {
        // stub
    }

    /**
     * Unschedule unsnooze notes event.
     */
    public static function clear_queued_actions()
    {
        // stub
    }

    /**
     * Delete marketing notes if marketing has been opted out.
     *
     * @param string $old_value Old value.
     * @param string $value New value.
     */
    public static function possibly_delete_marketing_notes($old_value, $value)
    {
        // stub
    }

    /**
     * Delete actioned survey notes.
     */
    public static function possibly_delete_survey_notes()
    {
        // stub
    }

    /**
     * Get the status of a given note by name.
     *
     * @param string $note_name Name of the note.
     * @return string|bool The note status.
     */
    public static function get_note_status($note_name)
    {
        // stub
    }

    /**
     * Get action by id.
     *
     * @param Note $note The note that has of the action.
     * @param int  $action_id Action ID.
     * @return object|bool The found action.
     */
    public static function get_action_by_id($note, $action_id)
    {
        // stub
    }

    /**
     * Trigger note action.
     *
     * @param Note   $note The note that has the triggered action.
     * @param object $triggered_action The triggered action.
     * @return Note|bool
     */
    public static function trigger_note_action($note, $triggered_action)
    {
        // stub
    }

    /**
     * Record tracks event for a specific user.
     *
     * @param int    $user_id The user id we want to record for the event.
     * @param string $event_name Name of the event to record.
     * @param array  $params The params to send to the event recording.
     */
    public static function record_tracks_event_with_user($user_id, $event_name, $params)
    {
        // stub
    }

    /**
     * Record tracks event without using cookies.
     *
     * @param string $event_name Name of the event to record.
     * @param array  $params The params to send to the event recording.
     */
    private static function record_tracks_event_without_cookies($event_name, $params)
    {
        // stub
    }

    /**
     * Get screen name.
     *
     * @return string The screen name.
     */
    public static function get_screen_name()
    {
        // stub
    }

    /**
     * Loads the data store.
     *
     * If the "admin-note" data store is unavailable, attempts to load it
     * will result in an exception.
     * This method catches that exception and throws a custom one instead.
     *
     * @return \WC_Data_Store The "admin-note" data store.
     * @throws NotesUnavailableException Throws exception if data store loading fails.
     */
    public static function load_data_store()
    {
        // stub
    }

}

