<?php

namespace Action_Scheduler\Migration;

/**
 * Class LogMigrator
 *
 * @package Action_Scheduler\Migration
 *
 * @since 3.0.0
 *
 * @codeCoverageIgnore
 */
class LogMigrator
{
    /**
     * ActionMigrator constructor.
     *
     * @param ActionScheduler_Logger $source_logger Source logger object.
     * @param ActionScheduler_Logger $destination_logger Destination logger object.
     */
    public function __construct(ActionScheduler_Logger $source_logger, ActionScheduler_Logger $destination_logger)
{
}
    /**
     * Migrate an action log.
     *
     * @param int $source_action_id Source logger object.
     * @param int $destination_action_id Destination logger object.
     */
    public function migrate($source_action_id, $destination_action_id)
{
}
}