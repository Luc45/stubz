<?php

namespace Automattic\WooCommerce\Enums;

/**
 * Enum class for all the internal order statuses.
 * These statuses are used internally by WooCommerce to query database directly.
 */
final class OrderInternalStatus
{
    public const PENDING = 'wc-pending';
    public const PROCESSING = 'wc-processing';
    public const ON_HOLD = 'wc-on-hold';
    public const COMPLETED = 'wc-completed';
    public const CANCELLED = 'wc-cancelled';
    public const REFUNDED = 'wc-refunded';
    public const FAILED = 'wc-failed';
}