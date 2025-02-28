<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * CheckoutTrait
 *
 * Shared functionality for checkout route.
 */
trait CheckoutTrait
{
    /**
     * Prepare a single item for response. Handles setting the status based on the payment result.
     *
     * @param mixed            $item Item to format to schema.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, \WP_REST_Request $request)
    {
    }
    /**
     * For orders which do not require payment, just update status.
     *
     * @param \WP_REST_Request $request Request object.
     * @param PaymentResult    $payment_result Payment result object.
     */
    private function process_without_payment(\WP_REST_Request $request, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult $payment_result)
    {
    }
    /**
     * Fires an action hook instructing active payment gateways to process the payment for an order and provide a result.
     *
     * @throws RouteException On error.
     *
     * @param \WP_REST_Request $request Request object.
     * @param PaymentResult    $payment_result Payment result object.
     */
    private function process_payment(\WP_REST_Request $request, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult $payment_result)
    {
    }
    /**
     * Gets the chosen payment method ID from the request.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return string
     */
    private function get_request_payment_method_id(\WP_REST_Request $request)
    {
    }
    /**
     * Gets and formats payment request data.
     *
     * @param \WP_REST_Request $request Request object.
     * @return array
     */
    private function get_request_payment_data(\WP_REST_Request $request)
    {
    }
    /**
     * Update the current order using the posted values from the request.
     *
     * @param \WP_REST_Request $request Full details about the request.
     */
    private function update_order_from_request(\WP_REST_Request $request)
    {
    }
    /**
     * Gets the chosen payment method title from the request.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return string
     */
    private function get_request_payment_method_title(\WP_REST_Request $request)
    {
    }
    /**
     * Persist additional fields for the order after validating them.
     *
     * @param \WP_REST_Request $request Full details about the request.
     *
     * @throws RouteException On error.
     */
    private function persist_additional_fields_for_order(\WP_REST_Request $request)
    {
    }
}
