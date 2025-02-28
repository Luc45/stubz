<?php
/**
 * Commands for Action Scheduler.
 */
class ActionScheduler_WPCLI_Clean_Command extends \WP_CLI_Command
{
    /**
     * Run the Action Scheduler Queue Cleaner
     *
     * ## OPTIONS
     *
     * [--batch-size=<size>]
     * : The maximum number of actions to delete per batch. Defaults to 20.
     *
     * [--batches=<size>]
     * : Limit execution to a number of batches. Defaults to 0, meaning batches will continue all eligible actions are deleted.
     *
     * [--status=<status>]
     * : Only clean actions with the specified status. Defaults to Canceled, Completed. Define multiple statuses as a comma separated string (without spaces), e.g. `--status=complete,failed,canceled`
     *
     * [--before=<datestring>]
     * : Only delete actions with scheduled date older than this. Defaults to 31 days. e.g `--before='7 days ago'`, `--before='02-Feb-2020 20:20:20'`
     *
     * [--pause=<seconds>]
     * : The number of seconds to pause between batches. Default no pause.
     *
     * @param array $args Positional arguments.
     * @param array $assoc_args Keyed arguments.
     * @throws \WP_CLI\ExitException When an error occurs.
     *
     * @subcommand clean
     */
    public function clean($args, $assoc_args)
{
}
    /**
     * Print WP CLI message about how many batches of actions were processed.
     *
     * @param int $batches_processed Number of batches processed.
     */
    protected function print_total_batches(int $batches_processed)
{
}
    /**
     * Convert an exception into a WP CLI error.
     *
     * @param Exception $e The error object.
     */
    protected function print_error(Exception $e)
{
}
    /**
     * Print a success message with the number of completed actions.
     *
     * @param int $actions_deleted Number of deleted actions.
     */
    protected function print_success(int $actions_deleted)
{
}
}
