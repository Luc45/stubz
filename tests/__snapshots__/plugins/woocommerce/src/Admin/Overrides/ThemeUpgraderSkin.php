<?php

namespace Automattic\WooCommerce\Admin\Overrides;

/**
 * Admin\Overrides\ThemeUpgraderSkin Class.
 */
class ThemeUpgraderSkin
{
    /**
     * Avoid undefined property error from \Theme_Upgrader::check_parent_theme_filter().
     *
     * @var array
     */
    public $api = null;

    /**
     * Hide the skin header display.
     */
    public function header()
{
}
    /**
     * Hide the skin footer display.
     */
    public function footer()
{
}
    /**
     * Hide the skin feedback display.
     *
     * @param string $string String to display.
     * @param mixed  ...$args Optional text replacements.
     */
    public function feedback($string, ...$args)
{
}
    /**
     * Hide the skin after display.
     */
    public function after()
{
}
}