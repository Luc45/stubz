<?php
/**
 * WC_Notes_Run_Db_Update.
 */
class WC_Notes_Run_Db_Update
{
    public const NOTE_NAME = 'wc-update-db-reminder';
    /**
     * Attach hooks.
     */
    public function __construct()
{
}
    /**
     * Set this notice to an actioned one, so that it's no longer displayed.
     */
    public static function set_notice_actioned()
{
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
}
}
