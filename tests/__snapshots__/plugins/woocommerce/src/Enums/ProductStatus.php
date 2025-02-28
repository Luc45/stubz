<?php

namespace Automattic\WooCommerce\Enums;

/**
 * Enum class for all the product statuses.
 */
final class ProductStatus
{
    const AUTO_DRAFT = 'auto-draft';
    const DRAFT = 'draft';
    const PENDING = 'pending';
    const PRIVATE = 'private';
    const PUBLISH = 'publish';
    const TRASH = 'trash';
    const FUTURE = 'future';
}