<?php

namespace Action_Scheduler\WP_CLI;

/**
 * Class Migration_Command
 *
 * @package Action_Scheduler\WP_CLI
 *
 * @since 3.0.0
 *
 * @codeCoverageIgnore
 */
class Migration_Command
{
    /**
     * Number of actions migrated.
     *
     * @var int
     */
    private $total_processed = 0;

    /**
     * Register the command with WP-CLI
     */
    public function register()
    {
        // stub
    }

    /**
     * Process the data migration.
     *
     * @param array $positional_args Required for WP CLI. Not used in migration.
     * @param array $assoc_args Optional arguments.
     *
     * @return void
     */
    public function migrate($positional_args, $assoc_args)
    {
        // stub
    }

    /**
     * Build the config object used to create the Runner
     *
     * @param array $args Optional arguments.
     *
     * @return ActionScheduler\Migration\Config
     */
    private function get_migration_config($args)
    {
        // stub
    }

    /**
     * Hook command line logging into migration actions.
     */
    private function init_logging()
    {
        // stub
    }

}

