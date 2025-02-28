<?php

/**
 * Class ActionScheduler_DataController
 *
 * The main plugin/initialization class for the data stores.
 *
 * Responsible for hooking everything up with WordPress.
 *
 * @package Action_Scheduler
 *
 * @since 3.0.0
 */
class ActionScheduler_DataController
{
    /** Action data store class name. */
    public const DATASTORE_CLASS = 'ActionScheduler_DBStore';
    /** Logger data store class name. */
    public const LOGGER_CLASS = 'ActionScheduler_DBLogger';
    /** Migration status option name. */
    public const STATUS_FLAG = 'action_scheduler_migration_status';
    /** Migration status option value. */
    public const STATUS_COMPLETE = 'complete';
    /** Migration minimum required PHP version. */
    public const MIN_PHP_VERSION = '5.5';
    /**
     * Get a flag indicating whether the migration environment dependencies are met.
     *
     * @return bool
     */
    public static function dependencies_met()
    {
    }
    /**
     * Get a flag indicating whether the migration is complete.
     *
     * @return bool Whether the flag has been set marking the migration as complete
     */
    public static function is_migration_complete()
    {
    }
    /**
     * Mark the migration as complete.
     */
    public static function mark_migration_complete()
    {
    }
    /**
     * Unmark migration when a plugin is de-activated. Will not work in case of silent activation, for example in an update.
     * We do this to mitigate the bug of lost actions which happens if there was an AS 2.x to AS 3.x migration in the past, but that plugin is now
     * deactivated and the site was running on AS 2.x again.
     */
    public static function mark_migration_incomplete()
    {
    }
    /**
     * Set the action store class name.
     *
     * @param string $class Classname of the store class.
     *
     * @return string
     */
    public static function set_store_class($class)
    {
    }
    /**
     * Set the action logger class name.
     *
     * @param string $class Classname of the logger class.
     *
     * @return string
     */
    public static function set_logger_class($class)
    {
    }
    /**
     * Set the sleep time in seconds.
     *
     * @param integer $sleep_time The number of seconds to pause before resuming operation.
     */
    public static function set_sleep_time($sleep_time)
    {
    }
    /**
     * Set the tick count required for freeing memory.
     *
     * @param integer $free_ticks The number of ticks to free memory on.
     */
    public static function set_free_ticks($free_ticks)
    {
    }
    /**
     * Free memory if conditions are met.
     *
     * @param int $ticks Current tick count.
     */
    public static function maybe_free_memory($ticks)
    {
    }
    /**
     * Reduce memory footprint by clearing the database query and object caches.
     */
    public static function free_memory()
    {
    }
    /**
     * Connect to table datastores if migration is complete.
     * Otherwise, proceed with the migration if the dependencies have been met.
     */
    public static function init()
    {
    }
    /**
     * Singleton factory.
     */
    public static function instance()
    {
    }
}
