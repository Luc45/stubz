<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Events Class.
 */
class Events
{
    /**
     * The single instance of the class.
     *
     * @var object
     */
    protected static $instance = null;
    /**
     * Constructor
     *
     * @return void
     */
    protected function __construct()
    {
    }
    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    final public static function instance()
    {
    }
    /**
     * Cron event handlers.
     */
    public function init()
    {
    }
    /**
     * Daily events to run.
     *
     * Note: Order_Milestones::possibly_add_note is hooked to this as well.
     */
    public function do_wc_admin_daily()
    {
    }
    /**
     * Get note.
     *
     * @param Note $note_from_db The note object from the database.
     */
    public function get_note_from_db($note_from_db)
    {
    }
    /**
     * Adds notes that should be added.
     */
    protected function possibly_add_notes()
    {
    }
    /**
     * Deletes notes that should be deleted.
     */
    protected function possibly_delete_notes()
    {
    }
    /**
     * Updates notes that should be updated.
     */
    protected function possibly_update_notes()
    {
    }
    /**
     * Checks if remote inbox notifications are enabled.
     *
     * @return bool Whether remote inbox notifications are enabled.
     */
    protected function is_remote_inbox_notifications_enabled()
    {
    }
    /**
     * Checks if merchant email notifications are enabled.
     *
     * @return bool Whether merchant email notifications are enabled.
     */
    protected function is_merchant_email_notifications_enabled()
    {
    }
    /**
     *   Refresh transient for the following DataSourcePollers on wc_admin_daily cron job.
     *   - PaymentGatewaySuggestionsDataSourcePoller
     *   - RemoteFreeExtensionsDataSourcePoller
     */
    protected function possibly_refresh_data_source_pollers()
    {
    }
}
