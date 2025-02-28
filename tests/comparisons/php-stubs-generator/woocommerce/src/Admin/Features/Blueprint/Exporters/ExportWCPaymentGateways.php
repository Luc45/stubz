<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Exporters;

/**
 * ExportWCPaymentGateways class
 */
class ExportWCPaymentGateways implements \Automattic\WooCommerce\Blueprint\Exporters\StepExporter
{
    /**
     * Payment gateway IDs to exclude from export
     *
     * @var array|string[] Payment gateway IDs to exclude from export
     */
    protected array $exclude_ids = array('pre_install_woocommerce_payments_promotion');
    /**
     * Export the step
     *
     * @return Step
     */
    public function export(): \Automattic\WooCommerce\Blueprint\Steps\Step
    {
    }
    /**
     * Return the payment gateways resgietered in WooCommerce
     *
     * @return string
     */
    public function get_wc_payment_gateways()
    {
    }
    /**
     * Get the step name
     *
     * @return string
     */
    public function get_step_name()
    {
    }
    /**
     * Maybe hide WooCommerce Payments gateways
     *
     * @return void
     */
    protected function maybe_hide_wcpay_gateways()
    {
    }
}
