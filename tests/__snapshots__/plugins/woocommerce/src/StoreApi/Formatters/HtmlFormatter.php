<?php

namespace Automattic\WooCommerce\StoreApi\Formatters;

/**
 * Html Formatter.
 *
 * Formats HTML in API responses.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class HtmlFormatter
{
    /**
     * Format a given value and return the result.
     *
     * The wptexturize, convert_chars, and trim functions are also used in the `the_title` filter.
     * The function wp_kses_post removes disallowed HTML tags.
     *
     * @param string|array $value Value to format.
     * @param array        $options Options that influence the formatting.
     * @return string
     */
    public function format($value, array $options = array())
{
}
}