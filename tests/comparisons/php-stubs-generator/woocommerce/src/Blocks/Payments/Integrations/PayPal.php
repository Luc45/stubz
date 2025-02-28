<?php

namespace Automattic\WooCommerce\Blocks\Payments\Integrations;

/**
 * PayPal Standard payment method integration
 *
 * @since 2.6.0
 */
final class PayPal extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    /**
     * Constructor
     *
     * @param Api $asset_api An instance of Api.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
    {
    }
    /**
     * Initializes the payment method type.
     */
    public function initialize()
    {
    }
    /**
     * Returns if this payment method should be active. If false, the scripts will not be enqueued.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Returns an array of scripts/handles to be registered for this payment method.
     *
     * @return array
     */
    public function get_payment_method_script_handles()
    {
    }
    /**
     * Returns an array of key=>value pairs of data made available to the payment methods script.
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
    /**
     * Returns an array of supported features.
     *
     * @return string[]
     */
    public function get_supported_features()
    {
    }
}