<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Class PaymentInfo.
 */
class PaymentInfo
{
    /**
     * This array must contain all the names of the files in the CardIcons directory (without extension),
     * except 'unknown'.
     */
    /**
     * Get info about the card used for payment on an order.
     *
     * @param WC_Abstract_Order $order The order in question.
     *
     * @return array
     */
    public static function get_card_info(WC_Abstract_Order $order): array
{
}
}