<?php

namespace Automattic\WooCommerce\StoreApi\Formatters;

/**
 * Currency Formatter.
 *
 * Formats an array of monetary values by inserting currency data.
 */
class CurrencyFormatter implements \Automattic\WooCommerce\StoreApi\Formatters\FormatterInterface
{
    /**
     * Format a given value and return the result.
     *
     * @param array $value Value to format.
     * @param array $options Options that influence the formatting.
     * @return array
     */
    public function format($value, array $options = [])
    {
    }
}