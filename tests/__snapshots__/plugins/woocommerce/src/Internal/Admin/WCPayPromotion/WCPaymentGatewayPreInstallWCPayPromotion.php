<?php

namespace Automattic\WooCommerce\Internal\Admin\WCPayPromotion;

/**
 * A pseudo WCPay gateway class.
 *
 * @extends \WC_Payment_Gateway
 */
class WCPaymentGatewayPreInstallWCPayPromotion
{
    const GATEWAY_ID = 'pre_install_woocommerce_payments_promotion';

    /**
     * Constructor
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Initialise Gateway Settings Form Fields.
     */
    public function init_form_fields()
    {
        // stub
    }

    /**
     * Check if the promotional gateway has been dismissed.
     *
     * @return bool
     */
    public static function is_dismissed()
    {
        // stub
    }

}