<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Class PaymentInfo.
 */
class PaymentInfo
{
    private const KNOWN_CARD_BRANDS = array (
  0 => 'amex',
  1 => 'diners',
  2 => 'discover',
  3 => 'interac',
  4 => 'jcb',
  5 => 'mastercard',
  6 => 'visa',
);
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