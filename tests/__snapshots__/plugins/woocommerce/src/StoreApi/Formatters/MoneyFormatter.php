<?php

namespace Automattic\WooCommerce\StoreApi\Formatters;

/**
 * Money Formatter.
 *
 * Formats monetary values using store settings.
 */
class MoneyFormatter
{
    /**
     * Format a given price value and return the result as a string without decimals.
     *
     * @param int|float|string $value Value to format. Int is allowed, as it may also represent a valid price.
     * @param array            $options Options that influence the formatting.
     * @return string
     */
    public function format($value, array $options = array (
))
    {
        // stub
    }

}

