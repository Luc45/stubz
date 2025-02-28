<?php

namespace Action_Scheduler\Migration;

/**
 * Class ActionMigrator
 *
 * @package Action_Scheduler\Migration
 *
 * @since 3.0.0
 *
 * @codeCoverageIgnore
 */
class ActionMigrator
{
    /**
     * ActionMigrator constructor.
     *
     * @param \ActionScheduler_Store $source_store Source store object.
     * @param \ActionScheduler_Store $destination_store Destination store object.
     * @param LogMigrator            $log_migrator Log migrator object.
     */
    public function __construct(\ActionScheduler_Store $source_store, \ActionScheduler_Store $destination_store, \Action_Scheduler\Migration\LogMigrator $log_migrator)
    {
    }
    /**
     * Migrate an action.
     *
     * @param int $source_action_id Action ID.
     *
     * @return int 0|new action ID
     * @throws \RuntimeException When unable to delete action from the source store.
     */
    public function migrate($source_action_id)
    {
    }
}
