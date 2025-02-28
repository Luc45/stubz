<?php

namespace Automattic\WooCommerce\Admin\DateTimeProvider;

/**
 * Current DateTime Provider.
 *
 * Uses the current DateTime.
 */
class CurrentDateTimeProvider implements \Automattic\WooCommerce\Admin\DateTimeProvider\DateTimeProviderInterface
{
    /**
     * Returns the current DateTime.
     *
     * @return DateTime
     */
    public function get_now()
    {
    }
}