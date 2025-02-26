<?php

namespace Automattic\WooCommerce\Enums;

/**
 * Enum class for all the internal order statuses.
 * These statuses are used internally by WooCommerce to query database directly.
 */
final class OrderInternalStatus extends \
{
    const PENDING = 'wc-pending';

    const PROCESSING = 'wc-processing';

    const ON_HOLD = 'wc-on-hold';

    const COMPLETED = 'wc-completed';

    const CANCELLED = 'wc-cancelled';

    const REFUNDED = 'wc-refunded';

    const FAILED = 'wc-failed';

}

