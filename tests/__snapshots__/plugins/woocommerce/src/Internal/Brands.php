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
    public static final function init()
    {
        // stub
    }

    /**
     * As of WooCommerce 9.6, Brands is enabled for all users.
     *
     * @return bool
     */
    public static function is_enabled()
    {
        // stub
    }

    /**
     * If WooCommerce Brands gets activated forcibly, without WooCommerce active (e.g. via '--skip-plugins'),
     * remove WooCommerce Brands initialization functions early on in the 'plugins_loaded' timeline.
     */
    public static function prepare()
    {
        // stub
    }

}