<?php

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
     * Register's all endpoints as commands once WP and WC have all loaded.
     */
    public static function after_wp_load()
    {
    }
}
