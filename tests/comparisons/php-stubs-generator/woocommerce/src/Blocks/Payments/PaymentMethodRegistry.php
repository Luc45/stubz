<?php

namespace Automattic\WooCommerce\Blocks\Payments;

/**
 * Class used for interacting with payment method types.
 *
 * @since 2.6.0
 */
final class PaymentMethodRegistry extends \Automattic\WooCommerce\Blocks\Integrations\IntegrationRegistry
{
    /**
     * Retrieves all registered payment methods that are also active.
     *
     * @return PaymentMethodTypeInterface[]
     */
    public function get_all_active_registered()
    {
    }
    /**
     * Gets an array of all registered payment method script handles, but only for active payment methods.
     *
     * @return string[]
     */
    public function get_all_active_payment_method_script_dependencies()
    {
    }
    /**
     * Gets an array of all registered payment method script data, but only for active payment methods.
     *
     * @return array
     */
    public function get_all_registered_script_data()
    {
    }
}