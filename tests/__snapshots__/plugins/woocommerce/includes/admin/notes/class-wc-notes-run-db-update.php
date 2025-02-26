<?php

namespace ;

/**
 * WC_Notes_Run_Db_Update.
 */
class WC_Notes_Run_Db_Update extends \
{
    const NOTE_NAME = 'wc-update-db-reminder';

    /**
     * Attach hooks.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Get current notice id from the database.
     *
     * Retrieves the first notice of this type.
     *
     * @return int|void Note id or null in case no note was found.
     */
    private static function get_current_notice()
    {
        // stub
    }

    /**
     * Set this notice to an actioned one, so that it's no longer displayed.
     */
    public static function set_notice_actioned()
    {
        // stub
    }

    /**
     * Check whether the note is up to date for a fresh display.
     *
     * The check tests if
     *  - actions are set up for the first 'Update database' notice, and
     *  - URL for note's action is equal to the given URL (to check for potential nonce update).
     *
     * @param Note               $note            Note to check.
     * @param string             $update_url      URL to check the note against.
     * @param array<int, string> $current_actions List of actions to check for.
     * @return bool
     */
    private static function note_up_to_date($note, $update_url, $current_actions)
    {
        // stub
    }

    /**
     * Create and set up the first (out of 3) 'Database update needed' notice and store it in the database.
     *
     * If a $note_id is given, the method updates the note instead of creating a new one.
     *
     * @param integer $note_id Note db record to update.
     * @return int Created/Updated note id
     */
    private static function update_needed_notice($note_id = null)
    {
        // stub
    }

    /**
     * Update the existing note with $note_id with information about the db upgrade being in progress.
     *
     * This is the second out of 3 notices displayed to the user.
     *
     * @param int $note_id Note id to update.
     */
    private static function update_in_progress_notice($note_id)
    {
        // stub
    }

    /**
     * Update the existing note with $note_id with information that db upgrade is done.
     *
     * This is the last notice (3 out of 3 notices) displayed to the user.
     *
     * @param int $note_id Note id to update.
     */
    private static function update_done_notice($note_id)
    {
        // stub
    }

    /**
     * Prepare the correct content of the db update note to be displayed by WC Admin.
     *
     * This one gets called on each page load, so try to bail quickly.
     *
     * If the db needs an update, the notice should be always shown.
     * If the db does not need an update, but the notice has *not* been actioned (i.e. after the db update, when
     * store owner hasn't acknowledged the successful db update), still show the Thanks notice.
     * If the db does not need an update, and the notice has been actioned, then notice should *not* be shown.
     * The notice should also be hidden if the db does not need an update and the notice does not exist.
     */
    public static function show_reminder()
    {
        // stub
    }

}

