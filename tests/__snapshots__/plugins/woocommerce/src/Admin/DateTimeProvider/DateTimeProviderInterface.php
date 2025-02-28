<?php

namespace Automattic\WooCommerce\Admin\DateTimeProvider;

/**
 * DateTime Provider Interface.
 */
interface DateTimeProviderInterface
{
    /**
     * Returns the current DateTime.
     *
     * @return DateTime
     */
    public function get_now();
}