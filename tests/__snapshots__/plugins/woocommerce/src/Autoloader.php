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
     * Require the autoloader and return the result.
     *
     * If the autoloader is not present, let's log the failure and display a nice admin notice.
     *
     * @return boolean
     */
    public static function init()
{
}
    /**
     * If the autoloader is missing, add an admin notice.
     */
    protected static function missing_autoloader()
{
}
}