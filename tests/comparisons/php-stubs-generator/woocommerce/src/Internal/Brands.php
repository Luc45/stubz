<?php

namespace Automattic\WooCommerce\Internal;

/**
 * Class to initiate Brands functionality in core.
 */
class Brands
{
    /**
     * Class initialization
     *
     * @internal
     */
    final public static function init()
    {
    }
    /**
     * As of WooCommerce 9.6, Brands is enabled for all users.
     *
     * @return bool
     */
    public static function is_enabled()
    {
    }
    /**
     * If WooCommerce Brands gets activated forcibly, without WooCommerce active (e.g. via '--skip-plugins'),
     * remove WooCommerce Brands initialization functions early on in the 'plugins_loaded' timeline.
     */
    public static function prepare()
    {
    }
}
