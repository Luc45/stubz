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
    public function prepare_item_for_response($item, WP_REST_Request $request)
{
}
}