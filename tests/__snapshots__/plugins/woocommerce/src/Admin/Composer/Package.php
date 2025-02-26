<?php

namespace Automattic\WooCommerce\Admin\Composer;

/**
 * Main package class.
 */
class Package
{
    const VERSION = '3.3.0';

    /**
     * Package active.
     *
     * @var bool
     */
    private static $package_active = false;

    /**
     * Active version
     *
     * @var bool
     */
    private static $active_version = null;

    /**
     * Init the package.
     *
     * Only initialize for WP 5.3 or greater.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Return the version of the package.
     *
     * @return string
     */
    public static function get_version()
    {
        // stub
    }

    /**
     * Return the active version of WC Admin.
     *
     * @return string
     */
    public static function get_active_version()
    {
        // stub
    }

    /**
     * Return whether the package is active.
     *
     * @return bool
     */
    public static function is_package_active()
    {
        // stub
    }

    /**
     * Return the path to the package.
     *
     * @return string
     */
    public static function get_path()
    {
        // stub
    }

    /**
     * Checks if notes have been initialized.
     */
    private static function is_notes_initialized()
    {
        // stub
    }

}

const WC_ADMIN_PACKAGE_EXISTS = true;

