<?php

namespace Action_Scheduler\Migration;

/**
 * Class Controller
 *
 * The main plugin/initialization class for migration to custom tables.
 *
 * @package Action_Scheduler\Migration
 *
 * @since 3.0.0
 *
 * @codeCoverageIgnore
 */
class Controller
{
    /**
     * Instance.
     *
     * @var self
     */
    private static $instance = null;
    /**
     * Scheduler instance.
     *
     * @var Action_Scheduler\Migration\Scheduler
     */
    private $migration_scheduler = null;
    /**
     * Class name of the store object.
     *
     * @var string
     */
    private $store_classname = null;
    /**
     * Class name of the logger object.
     *
     * @var string
     */
    private $logger_classname = null;
    /**
     * Flag to indicate migrating custom store.
     *
     * @var bool
     */
    private $migrate_custom_store = null;
    /**
     * Controller constructor.
     *
     * @param Scheduler $migration_scheduler Migration scheduler object.
     */
    protected function __construct(Action_Scheduler\Migration\Scheduler $migration_scheduler)
{
}
    /**
     * Set the action store class name.
     *
     * @param string $class Classname of the store class.
     *
     * @return string
     */
    public function get_store_class($class)
{
}
    /**
     * Set the action logger class name.
     *
     * @param string $class Classname of the logger class.
     *
     * @return string
     */
    public function get_logger_class($class)
{
}
    /**
     * Get flag indicating whether a custom datastore is in use.
     *
     * @return bool
     */
    public function has_custom_datastore()
{
}
    /**
     * Set up the background migration process.
     *
     * @return void
     */
    public function schedule_migration()
{
}
    /**
     * Get the default migration config object
     *
     * @return ActionScheduler\Migration\Config
     */
    public function get_migration_config_object()
{
}
    /**
     * Hook dashboard migration notice.
     */
    public function hook_admin_notices()
{
}
    /**
     * Show a dashboard notice that migration is in progress.
     */
    public function display_migration_notice()
{
}
    /**
     * Add store classes. Hook migration.
     */
    private function hook()
{
}
    /**
     * Possibly hook the migration scheduler action.
     */
    public function maybe_hook_migration()
{
}
    /**
     * Allow datastores to enable migration to AS tables.
     */
    public function allow_migration()
{
}
    /**
     * Proceed with the migration if the dependencies have been met.
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