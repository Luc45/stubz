<?php

namespace Automattic\WooCommerce\Admin\Overrides;

/**
 * Admin\Overrides\ThemeUpgrader Class.
 */
class ThemeUpgrader extends \Theme_Upgrader
{
    /**
     * Install a theme package.
     *
     * @param string $package The full local path or URI of the package.
     * @param array  $args {
     *     Optional. Other arguments for installing a theme package. Default empty array.
     *
     *     @type bool $clear_update_cache Whether to clear the updates cache if successful.
     *                                    Default true.
     * }
     *
     * @return bool|WP_Error True if the installation was successful, false or a WP_Error object otherwise.
     */
    public function install($package, $args = array())
    {
    }
}