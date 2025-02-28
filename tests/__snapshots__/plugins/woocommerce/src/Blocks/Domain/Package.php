<?php

namespace Automattic\WooCommerce\Blocks\Domain;

/**
 * Main package class.
 *
 * Returns information about the package and handles init.
 *
 * @since 2.5.0
 */
class Package
{
    /**
     * Constructor
     *
     * @param string        $version        Version of the plugin.
     * @param string        $plugin_path    Path to the main plugin file.
     * @param FeatureGating $deprecated     Deprecated Feature gating class.
     */
    public function __construct($version, $plugin_path, $deprecated = null)
{
}
    /**
     * Returns the version of WooCommerce Blocks.
     *
     * Note: since Blocks was merged into WooCommerce Core, the version of
     * WC Blocks doesn't update anymore. Use
     * `Constants::get_constant( 'WC_VERSION' )` when possible to get the
     * WooCommerce Core version.
     *
     * @return string
     */
    public function get_version()
{
}
    /**
     * Returns the version of WooCommerce Blocks stored in the database.
     *
     * @return string
     */
    public function get_version_stored_on_db()
{
}
    /**
     * Sets the version of WooCommerce Blocks in the database.
     * This is useful during the first installation or after the upgrade process.
     */
    public function set_version_stored_on_db()
{
}
    /**
     * Returns the path to the plugin directory.
     *
     * @param string $relative_path  If provided, the relative path will be
     *                               appended to the plugin path.
     *
     * @return string
     */
    public function get_path($relative_path = '')
{
}
    /**
     * Returns the url to the blocks plugin directory.
     *
     * @param string $relative_url If provided, the relative url will be
     *                             appended to the plugin url.
     *
     * @return string
     */
    public function get_url($relative_url = '')
{
}
    /**
     * Returns an instance of the FeatureGating class.
     *
     * @return FeatureGating
     */
    public function feature()
{
}
}