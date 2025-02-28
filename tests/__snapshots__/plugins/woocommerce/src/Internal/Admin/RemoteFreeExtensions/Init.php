<?php

namespace Automattic\WooCommerce\Internal\Admin\RemoteFreeExtensions;

/**
 * Remote Payment Methods engine.
 * This goes through the specs and gets eligible payment methods.
 */
class Init
{
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Go through the specs and run them.
     *
     * @param array $allowed_bundles Optional array of allowed bundles to be returned.
     * @return array
     */
    public static function get_extensions($allowed_bundles = array())
{
}
    /**
     * Delete the specs transient.
     */
    public static function delete_specs_transient()
{
}
    /**
     * Get specs or fetch remotely if they don't exist.
     */
    public static function get_specs()
{
}
}