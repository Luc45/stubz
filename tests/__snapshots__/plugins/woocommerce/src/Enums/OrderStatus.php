<?php

namespace Automattic\WooCommerce\Enums;

/**
 * Enum class for all the order statuses.
 *
 * For a full documentation on the public order statuses, please refer to the following link:
 * https://woocommerce.com/document/managing-orders/order-statuses/
 */
final class OrderStatus
{
    public const PENDING = 'pending';
    public const FAILED = 'failed';
    public const ON_HOLD = 'on-hold';
    public const COMPLETED = 'completed';
    public const PROCESSING = 'processing';
    public const REFUNDED = 'refunded';
    public const CANCELLED = 'cancelled';
    public const TRASH = 'trash';
    public const NEW = 'new';
    public const AUTO_DRAFT = 'auto-draft';
    public const DRAFT = 'draft';
}