<?php

/**
 * Hooks up our system status tools to the CLI.
 *
 * Forked from wp-cli/restful (by Daniel Bachhuber, released under the MIT license https://opensource.org/licenses/MIT).
 * https://github.com/wp-cli/restful
 *
 * @version 3.0.0
 * @package WooCommerce
 */
class WC_CLI_Tool_Command
{
    /**
     * Registers just a 'list' and 'run' command to the WC CLI
     * since we only want to enable certain actions on the system status
     * tools endpoints.
     */
    public static function register_commands()
    {
    }
}