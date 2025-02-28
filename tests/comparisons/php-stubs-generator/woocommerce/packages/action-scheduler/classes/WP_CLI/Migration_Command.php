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
class Migration_Command extends \WP_CLI_Command
{
    /**
     * Register the command with WP-CLI
     */
    public function register()
    {
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
    }
}
