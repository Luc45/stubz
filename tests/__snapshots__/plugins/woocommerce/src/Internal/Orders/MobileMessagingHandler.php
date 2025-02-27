<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Prepares formatted mobile deep link navigation link for order mails.
 */
class MobileMessagingHandler
{
    const OPEN_ORDER_INTERVAL_DAYS = 30;

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
        // stub
    }

    /**
     * Returns the closest date of last usage of any mobile app platform.
     *
     * @return ?DateTime
     */
    private static function get_closer_mobile_usage_date(): DateTime|null
    {
        // stub
    }

    /**
     * Returns last used date of specified mobile app platform.
     *
     * @param string $platform     mobile platform to check.
     * @param array  $mobile_usage mobile apps usage data.
     *
     * @return ?DateTime last used date of specified mobile app
     */
    private static function get_last_used_or_null(string $platform, array $mobile_usage): DateTime|null
    {
        // stub
    }

    /**
     * Prepares message with a deep link to mobile payment.
     *
     * @param ?int   $blog_id blog id to deep link to.
     * @param string $domain URL of the current site.
     *
     * @return string formatted message
     */
    private static function accept_payment_message(int|null $blog_id, $domain): string
    {
        // stub
    }

    /**
     * Prepares message with a deep link to manage order details.
     *
     * @param int    $blog_id blog id to deep link to.
     * @param int    $order_id order id to deep link to.
     * @param string $domain URL of the current site.
     *
     * @return string formatted message
     */
    private static function manage_order_message(int $blog_id, int $order_id, string $domain): string
    {
        // stub
    }

    /**
     * Prepares message with a deep link to learn more about mobile app.
     *
     * @param ?int   $blog_id blog id used for tracking.
     * @param string $domain URL of the current site.
     *
     * @return string formatted message
     */
    private static function no_app_message(int|null $blog_id, string $domain): string
    {
        // stub
    }

    /**
     * Prepares array of parameters used by WooCommerce.com for tracking.
     *
     * @param string   $campaign name of the deep link campaign.
     * @param int|null $blog_id blog id of the current site.
     * @param string   $domain URL of the current site.
     *
     * @return array
     */
    private static function prepare_utm_parameters(string $campaign, int|null $blog_id, string $domain): array
    {
        // stub
    }

}