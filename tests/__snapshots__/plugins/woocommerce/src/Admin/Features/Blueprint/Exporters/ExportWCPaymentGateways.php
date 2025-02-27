<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Exporters;

/**
 * ExportWCPaymentGateways class
 */
class ExportWCPaymentGateways
{
    /**
     * Payment gateway IDs to exclude from export
     *
     * @var array|string[] Payment gateway IDs to exclude from export
     */
    protected array $exclude_ids = array (
  0 => 'pre_install_woocommerce_payments_promotion',
);

    /**
     * Export the step
     *
     * @return Step
     */
    public function export(): Automattic\WooCommerce\Blueprint\Steps\Step
    {
        // stub
    }

    /**
     * Return the payment gateways resgietered in WooCommerce
     *
     * @return string
     */
    public function get_wc_payment_gateways()
    {
        // stub
    }

    /**
     * Get the step name
     *
     * @return string
     */
    public function get_step_name()
    {
        // stub
    }

    /**
     * Maybe hide WooCommerce Payments gateways
     *
     * @return void
     */
    protected function maybe_hide_wcpay_gateways()
    {
        // stub
    }

    /**
     * Return label used in the frontend.
     *
     * @return string
     */
    public function get_label()
    {
        // stub
    }

    /**
     * Return description used in the frontend.
     *
     * @return string
     */
    public function get_description()
    {
        // stub
    }

}