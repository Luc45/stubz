<?php

/**
 * Commands for Action Scheduler.
 */
class ActionScheduler_WPCLI_Scheduler_command extends \WP_CLI_Command
{
    /**
     * Force tables schema creation for Action Scheduler
     *
     * ## OPTIONS
     *
     * @param array $args Positional arguments.
     * @param array $assoc_args Keyed arguments.
     *
     * @subcommand fix-schema
     */
    public function fix_schema($args, $assoc_args)
{
}
    /**
     * Run the Action Scheduler
     *
     * ## OPTIONS
     *
     * [--batch-size=<size>]
     * : The maximum number of actions to run. Defaults to 100.
     *
     * [--batches=<size>]
     * : Limit execution to a number of batches. Defaults to 0, meaning batches will continue being executed until all actions are complete.
     *
     * [--cleanup-batch-size=<size>]
     * : The maximum number of actions to clean up. Defaults to the value of --batch-size.
     *
     * [--hooks=<hooks>]
     * : Only run actions with the specified hook. Omitting this option runs actions with any hook. Define multiple hooks as a comma separated string (without spaces), e.g. `--hooks=hook_one,hook_two,hook_three`
     *
     * [--group=<group>]
     * : Only run actions from the specified group. Omitting this option runs actions from all groups.
     *
     * [--exclude-groups=<groups>]
     * : Run actions from all groups except the specified group(s). Define multiple groups as a comma separated string (without spaces), e.g. '--group_a,group_b'. This option is ignored when `--group` is used.
     *
     * [--free-memory-on=<count>]
     * : The number of actions to process between freeing memory. 0 disables freeing memory. Default 50.
     *
     * [--pause=<seconds>]
     * : The number of seconds to pause when freeing memory. Default no pause.
     *
     * [--force]
     * : Whether to force execution despite the maximum number of concurrent processes being exceeded.
     *
     * @param array $args Positional arguments.
     * @param array $assoc_args Keyed arguments.
     * @throws \WP_CLI\ExitException When an error occurs.
     *
     * @subcommand run
     */
    public function run($args, $assoc_args)
{
}
    /**
     * Converts a string of comma-separated values into an array of those same values.
     *
     * @param string $string The string of one or more comma separated values.
     *
     * @return array
     */
    private function parse_comma_separated_string($string): array
{
}
    /**
     * Print WP CLI message about how many actions are about to be processed.
     *
     * @param int $total Number of actions found.
     */
    protected function print_total_actions($total)
{
}
    /**
     * Print WP CLI message about how many batches of actions were processed.
     *
     * @param int $batches_completed Number of completed batches.
     */
    protected function print_total_batches($batches_completed)
{
}
    /**
     * Convert an exception into a WP CLI error.
     *
     * @param Exception $e The error object.
     *
     * @throws \WP_CLI\ExitException Under some conditions WP CLI may throw an exception.
     */
    protected function print_error(Exception $e)
{
}
    /**
     * Print a success message with the number of completed actions.
     *
     * @param int $actions_completed Number of completed actions.
     */
    protected function print_success($actions_completed)
{
}
}
