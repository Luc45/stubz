<?php

namespace Automattic\WooCommerce\Internal;

/**
 * Class MC Stats, used to record internal usage stats for Automattic.
 *
 * This class is a wrapper around the Jetpack MC Stats package.
 * See https://github.com/Automattic/jetpack-a8c-mc-stats/tree/trunk for more details.
 */
class McStats extends \Automattic\Jetpack\A8c_Mc_Stats
{
    /**
     * Return the stats from a group in an array ready to be added as parameters in a query string
     *
     * Jetpack MC Stats package prefixes group names with "x_jetpack-" so we override this method to prefix group names with "x_woocommerce-".
     *
     * @param string $group_name The name of the group to retrieve.
     * @return array Array with one item, where the key is the prefixed group and the value are all stats concatenated with a comma. If group not found, an empty array will be returned
     */
    public function get_group_query_args($group_name)
    {
    }
    /**
     * Outputs the tracking pixels for the current stats and empty the stored stats from the object
     *
     * @return void
     */
    public function do_stats()
    {
    }
    /**
     * Runs stats code for a one-off, server-side.
     *
     * @param string $url string The URL to be pinged. Should include `x_woocommerce-{$group}={$stats}` or whatever we want to store.
     *
     * @return bool If it worked.
     */
    public function do_server_side_stat($url)
    {
    }
    /**
     * Pings the stats server for the current stats and empty the stored stats from the object
     *
     * @return void
     */
    public function do_server_side_stats()
    {
    }
}
