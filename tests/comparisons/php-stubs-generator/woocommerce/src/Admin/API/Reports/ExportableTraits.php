<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * ExportableTraits class.
 */
trait ExportableTraits
{
    /**
     * Format numbers for CSV using store precision setting.
     *
     * @param string|float $value Numeric value.
     * @return string Formatted value.
     */
    public static function csv_number_format($value)
    {
    }
}