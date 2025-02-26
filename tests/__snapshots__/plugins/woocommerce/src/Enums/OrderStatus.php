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
    const PENDING = 'pending';

    const FAILED = 'failed';

    const ON_HOLD = 'on-hold';

    const COMPLETED = 'completed';

    const PROCESSING = 'processing';

    const REFUNDED = 'refunded';

    const CANCELLED = 'cancelled';

    const TRASH = 'trash';

    const NEW = 'new';

    const AUTO_DRAFT = 'auto-draft';

    const DRAFT = 'draft';

}

