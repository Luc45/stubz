<?php

namespace Automattic\WooCommerce\Internal\Admin\RemoteFreeExtensions;

/**
 * Evaluates the extension and returns it.
 */
class EvaluateExtension
{
    /**
     * Evaluates the specs and returns the bundles with visible extensions.
     *
     * @param array $specs extensions spec array.
     * @param array $allowed_bundles Optional array of allowed bundles to be returned.
     * @return array The bundles and errors.
     */
    public static function evaluate_bundles($specs, $allowed_bundles = array())
    {
    }
}