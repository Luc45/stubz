<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Importers;

/**
 * Class ImportSetWCPaymentGateways
 *
 * This class imports WooCommerce payment gateways settings and implements the StepProcessor interface.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint\Importers
 */
class ImportSetWCPaymentGateways
{
    /**
     * Process the import of WooCommerce payment gateways settings.
     *
     * @param object $schema The schema object containing import details.
     * @return StepProcessorResult
     */
    public function process($schema): Automattic\WooCommerce\Blueprint\StepProcessorResult
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
     * Get the class name for the step.
     *
     * @return string
     */
    public function get_step_class(): string
    {
        // stub
    }

}