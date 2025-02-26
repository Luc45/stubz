<?php

namespace Automattic\WooCommerce\RestApi;

/**
 * Main package class.
 *
 * @deprecated Use \Automattic\WooCommerce\RestApi\Server directly.
 */
class Package extends \
{
    /**
     * Init the package - load the REST API Server class.
     *
     * @deprecated since 4.5.0. Directly call Automattic\WooCommerce\RestApi\Server::instance()->init()
     */
    public static function init()
    {
        // stub
    }

    /**
     * Return the version of the package.
     *
     * @deprecated since 4.5.0. This tracks WooCommerce version now.
     * @return string
     */
    public static function get_version()
    {
        // stub
    }

    /**
     * Return the path to the package.
     *
     * @deprecated since 4.5.0. Directly call Automattic\WooCommerce\RestApi\Server::get_path()
     * @return string
     */
    public static function get_path()
    {
        // stub
    }

}

