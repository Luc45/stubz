<?php

namespace ;

/**
 * WC API to WC CLI Bridge.
 *
 * Hooks into the REST API, figures out which endpoints come from WC,
 * and registers them as CLI commands.
 *
 * Forked from wp-cli/restful (by Daniel Bachhuber, released under the MIT license https://opensource.org/licenses/MIT).
 * https://github.com/wp-cli/restful
 *
 * @version 3.0.0
 * @package WooCommerce
 */
class WC_CLI_Runner
{
    /**
     * Endpoints to disable (meaning they will not be available as CLI commands).
     * Some of these can either be done via WP already, or are offered with
     * some other changes (like tools).
     *
     * @var array
     */
    private static $disabled_endpoints = array (
  0 => 'settings',
  1 => 'settings/(?P<group_id>[\\w-]+)',
  2 => 'settings/(?P<group_id>[\\w-]+)/batch',
  3 => 'settings/(?P<group_id>[\\w-]+)/(?P<id>[\\w-]+)',
  4 => 'system_status',
  5 => 'system_status/tools',
  6 => 'system_status/tools/(?P<id>[\\w-]+)',
  7 => 'reports',
  8 => 'reports/sales',
  9 => 'reports/top_sellers',
);

    /**
     * The version of the REST API we should target to
     * generate commands.
     *
     * @var string
     */
    private static $target_rest_version = 'v2';

    /**
     * Register's all endpoints as commands once WP and WC have all loaded.
     */
    public static function after_wp_load()
    {
        // stub
    }

    /**
     * Generates command information and tells WP CLI about all
     * commands available from a route.
     *
     * @param WC_CLI_REST_Command $rest_command WC-API command.
     * @param string              $route Path to route endpoint.
     * @param array               $route_data Command data.
     * @param array               $command_args WP-CLI command arguments.
     */
    private static function register_route_commands($rest_command, $route, $route_data, $command_args = array (
))
    {
        // stub
    }

}

