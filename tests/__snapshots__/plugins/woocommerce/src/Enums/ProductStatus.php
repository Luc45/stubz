<?php

namespace Automattic\WooCommerce\Enums;

/**
 * Enum class for all the product statuses.
 */
final class ProductStatus
{
    public const AUTO_DRAFT = 'auto-draft';
    public const DRAFT = 'draft';
    public const PENDING = 'pending';
    public const PRIVATE = 'private';
    public const PUBLISH = 'publish';
    public const TRASH = 'trash';
    public const FUTURE = 'future';
}