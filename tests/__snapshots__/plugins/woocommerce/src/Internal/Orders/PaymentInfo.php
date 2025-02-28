<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Class PaymentInfo.
 */
class PaymentInfo
{
    const KNOWN_CARD_BRANDS = array (
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
    /**
     * Generate a CSS-compatible SVG icon of a card brand.
     *
     * @param string $brand The brand of the card.
     *
     * @return string
     */
    private static function get_card_icon(string|null $brand): string
{
}
    /**
     * Get info about the card used for payment on an order, when the payment gateway is WooPayments.
     *
     * @see https://docs.stripe.com/api/charges/object#charge_object-payment_method_details
     *
     * @param WC_Abstract_Order $order The order in question.
     *
     * @return array
     */
    private static function get_wcpay_card_info(WC_Abstract_Order $order): array
{
}
}