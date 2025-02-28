<?php

namespace Automattic\WooCommerce\Internal\Settings;

/**
 * This class handles sanitization of core options that need to conform to certain format.
 *
 * @since 6.6.0
 */
class OptionSanitizer
{
    /**
     * OptionSanitizer constructor.
     */
    public function __construct()
{
}
    /**
     * Sanitizes values for options of type 'color' before persisting to the database.
     * Falls back to previous/default value for the option if given an invalid value.
     *
     * @since 6.6.0
     * @param string $value Option value.
     * @param array  $option Option data.
     * @return string Color in hex format.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function sanitize_color_option($value, $option)
{
}
}