<?php

/**
 * Allows access to tracker snapshot for transparency and debugging.
 *
 * @since 5.5.0
 * @package WooCommerce
 */
class WC_CLI_Tracker_Command
{
    /**
     * Registers a command for showing WooCommerce Tracker snapshot data.
     */
    public static function register_commands()
    {
    }
    /**
     * Dump tracker snapshot data to screen.
     *
     * ## EXAMPLES
     *
     * wp wc tracker snapshot --format=yaml
     * wp wc tracker snapshot --format=json
     *
     * ## OPTIONS
     *
     * [--format=<format>]
     * : Render output in a particular format, see WP_CLI\Formatter for details.
     *
     * @see \WP_CLI\Formatter
     * @see WC_Tracker::get_tracking_data()
     * @param array $args WP-CLI positional arguments.
     * @param array $assoc_args WP-CLI associative arguments.
     */
    public static function show_tracker_snapshot($args, $assoc_args)
    {
    }
}