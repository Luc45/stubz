<?php

namespace Automattic\WooCommerce\Blocks\Payments\Integrations;

/**
 * Bank Transfer (BACS) payment method integration
 *
 * @since 3.0.0
 */
final class BankTransfer
{
    /**
     * Payment method name/id/slug (matches id in WC_Gateway_BACS in core).
     *
     * @var string
     */
    protected $name;

    /**
     * An instance of the Asset Api
     *
     * @var Api
     */
    private $asset_api = null;

    /**
     * Constructor
     *
     * @param Api $asset_api An instance of Api.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
    {
        // stub
    }

    /**
     * Initializes the payment method type.
     */
    public function initialize()
    {
        // stub
    }

    /**
     * Returns if this payment method should be active. If false, the scripts will not be enqueued.
     *
     * @return boolean
     */
    public function is_active()
    {
        // stub
    }

    /**
     * Returns an array of scripts/handles to be registered for this payment method.
     *
     * @return array
     */
    public function get_payment_method_script_handles()
    {
        // stub
    }

    /**
     * Returns an array of key=>value pairs of data made available to the payment methods script.
     *
     * @return array
     */
    public function get_payment_method_data()
    {
        // stub
    }

}