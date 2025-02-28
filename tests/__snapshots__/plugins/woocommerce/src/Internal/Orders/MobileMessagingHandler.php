<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Prepares formatted mobile deep link navigation link for order mails.
 */
class MobileMessagingHandler
{
    /**
     * Prepares mobile messaging with a deep link.
     *
     * @param WC_Order $order order that mobile message is created for.
     * @param ?int     $blog_id  of blog to make a deep link for (will be null if Jetpack is not enabled).
     * @param DateTime $now      current DateTime.
     * @param string   $domain URL of the current site.
     *
     * @return ?string
     */
    public static function prepare_mobile_message(WC_Order $order, int|null $blog_id, DateTime $now, string $domain): string|null
{
}
}