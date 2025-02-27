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
    const HOOK = 'action_scheduler/migration_hook';

    const GROUP = 'action-scheduler-migration';

    /**
     * Set up the callback for the scheduled job.
     */
    public function hook()
    {
        // stub
    }

    /**
     * Remove the callback for the scheduled job.
     */
    public function unhook()
    {
        // stub
    }

    /**
     * The migration callback.
     */
    public function run_migration()
    {
        // stub
    }

    /**
     * Mark the migration complete.
     */
    public function mark_complete()
    {
        // stub
    }

    /**
     * Get a flag indicating whether the migration is scheduled.
     *
     * @return bool Whether there is a pending action in the store to handle the migration
     */
    public function is_migration_scheduled()
    {
        // stub
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
        // stub
    }

    /**
     * Remove the scheduled migration action.
     */
    public function unschedule_migration()
    {
        // stub
    }

    /**
     * Get migration batch schedule interval.
     *
     * @return int Seconds between migration runs. Defaults to 0 seconds to allow chaining migration via Async Runners.
     */
    private function get_schedule_interval()
    {
        // stub
    }

    /**
     * Get migration batch size.
     *
     * @return int Number of actions to migrate in each batch. Defaults to 250.
     */
    private function get_batch_size()
    {
        // stub
    }

    /**
     * Get migration runner object.
     *
     * @return Runner
     */
    private function get_migration_runner()
    {
        // stub
    }

}