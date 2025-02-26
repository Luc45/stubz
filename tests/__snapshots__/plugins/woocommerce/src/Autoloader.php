<?php

namespace Automattic\WooCommerce;

/**
 * Autoloader class.
 *
 * @since 3.7.0
 */
class Autoloader
{
    /**
     * Static-only class.
     */
    private function __construct()
    {
        // stub
    }

    /**
     * Require the autoloader and return the result.
     *
     * If the autoloader is not present, let's log the failure and display a nice admin notice.
     *
     * @return boolean
     */
    public static function init()
    {
        // stub
    }

    /**
     * If the autoloader is missing, add an admin notice.
     */
    protected static function missing_autoloader()
    {
        // stub
    }

}

