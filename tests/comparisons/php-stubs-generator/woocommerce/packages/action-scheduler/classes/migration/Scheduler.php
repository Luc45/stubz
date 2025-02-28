<?php

namespace Action_Scheduler\Migration;

/**
 * Class Scheduler
 *
 * @package Action_Scheduler\WP_CLI
 *
 * @since 3.0.0
 *
 * @codeCoverageIgnore
 */
class Scheduler
{
    /** Migration action hook. */
    const HOOK = 'action_scheduler/migration_hook';
    /** Migration action group. */
    const GROUP = 'action-scheduler-migration';
    /**
     * Set up the callback for the scheduled job.
     */
    public function hook()
    {
    }
    /**
     * Remove the callback for the scheduled job.
     */
    public function unhook()
    {
    }
    /**
     * The migration callback.
     */
    public function run_migration()
    {
    }
    /**
     * Mark the migration complete.
     */
    public function mark_complete()
    {
    }
    /**
     * Get a flag indicating whether the migration is scheduled.
     *
     * @return bool Whether there is a pending action in the store to handle the migration
     */
    public function is_migration_scheduled()
    {
    }
    /**
     * Schedule the migration.
     *
     * @param int $when Optional timestamp to run the next migration batch. Defaults to now.
     *
     * @return string The action ID
     */
    public function schedule_migration($when = 0)
    {
    }
    /**
     * Remove the scheduled migration action.
     */
    public function unschedule_migration()
    {
    }
}