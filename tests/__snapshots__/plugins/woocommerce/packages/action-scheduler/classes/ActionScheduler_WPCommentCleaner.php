<?php

/**
 * Class ActionScheduler_WPCommentCleaner
 *
 * @since 3.0.0
 */
class ActionScheduler_WPCommentCleaner
{
    /**
     * Post migration hook used to cleanup the WP comment table.
     *
     * @var string
     */
    protected static $cleanup_hook = 'action_scheduler/cleanup_wp_comment_logs';

    /**
     * An instance of the ActionScheduler_wpCommentLogger class to interact with the comments table.
     *
     * This instance should only be used as an interface. It should not be initialized.
     *
     * @var ActionScheduler_wpCommentLogger
     */
    protected static $wp_comment_logger = null;

    /**
     * The key used to store the cached value of whether there are logs in the WP comment table.
     *
     * @var string
     */
    protected static $has_logs_option_key = 'as_has_wp_comment_logs';

    /**
     * Initialize the class and attach callbacks.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Determines if there are log entries in the wp comments table.
     *
     * Uses the flag set on migration completion set by @see self::maybe_schedule_cleanup().
     *
     * @return boolean Whether there are scheduled action comments in the comments table.
     */
    public static function has_logs()
    {
        // stub
    }

    /**
     * Schedules the WP Post comment table cleanup to run in 6 months if it's not already scheduled.
     * Attached to the migration complete hook 'action_scheduler/migration_complete'.
     */
    public static function maybe_schedule_cleanup()
    {
        // stub
    }

    /**
     * Delete all action comments from the WP Comments table.
     */
    public static function delete_all_action_comments()
    {
        // stub
    }

    /**
     * Registers admin notices about the orphaned action logs.
     */
    public static function register_admin_notice()
    {
        // stub
    }

    /**
     * Prints details about the orphaned action logs and includes information on where to learn more.
     */
    public static function print_admin_notice()
    {
        // stub
    }

}
