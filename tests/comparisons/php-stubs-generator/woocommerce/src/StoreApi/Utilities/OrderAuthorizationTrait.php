<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * OrderAuthorizationTrait
 *
 * Shared functionality for getting order authorization.
 */
trait OrderAuthorizationTrait
{
    /**
     * Check if authorized to get the order.
     *
     * @throws RouteException If the order is not found or the order key is invalid.
     *
     * @param \WP_REST_Request $request Request object.
     * @return boolean|WP_Error
     */
    public function is_authorized(\WP_REST_Request $request)
    {
    }
    /**
     * Validate a given billing email against an existing order.
     *
     * @throws RouteException Exception if invalid data is detected.
     * @param integer $order_id Order ID.
     * @param string  $billing_email Billing email.
     */
    public function validate_billing_email_matches_order($order_id, $billing_email)
    {
    }
}