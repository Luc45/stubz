<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs;

/**
 * RemoteSpecsEngine class.
 */
abstract class RemoteSpecsEngine
{
    /**
     * Log errors.
     *
     * @param array $errors Array of errors from \Throwable interface.
     */
    public static function log_errors($errors = array())
    {
    }
}