<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Steps;

/**
 * Class SetWCPaymentGateways
 *
 * This class sets WooCommerce payment gateways and extends the Step class.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint\Steps
 */
class SetWCPaymentGateways extends \Automattic\WooCommerce\Blueprint\Steps\Step
{
    /**
     * Payment gateways.
     *
     * @var array $payment_gateways Array of payment gateways.
     */
    protected array $payment_gateways = array();
    /**
     * Constructor.
     *
     * @param array $payment_gateways Optional array of payment gateways.
     */
    public function __construct(array $payment_gateways = array())
{
}
    /**
     * Add a payment gateway.
     *
     * @param string $id The ID of the payment gateway.
     * @param string $title The title of the payment gateway.
     * @param string $description The description of the payment gateway.
     * @param string $enabled Whether the payment gateway is enabled ('yes' or 'no').
     */
    public function add_payment_gateway($id, $title, $description, $enabled)
{
}
    /**
     * Get the name of the step.
     *
     * @return string
     */
    public static function get_step_name(): string
{
}
    /**
     * Get the schema for the step.
     *
     * @param int $version Optional version number of the schema.
     * @return array The schema array.
     */
    public static function get_schema($version = 1): array
{
}
    /**
     * Prepare the JSON array for the step.
     *
     * @return array The JSON array.
     */
    public function prepare_json_array(): array
{
}
}