<?php

namespace Automattic\WooCommerce\Internal\Traits;

/**
 * Trait OrderAttributionMeta
 *
 * @since 8.5.0
 *
 * phpcs:disable Generic.Commenting.DocComment.MissingShort
 */
trait OrderAttributionMeta
{
    /**
     * Get the device type based on the other meta fields.
     *
     * @param array $values The meta values.
     *
     * @return string The device type.
     */
    protected function get_device_type(array $values): string
{
}
}