<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * BillingAddressSchema class.
 *
 * Provides a generic billing address schema for composition in other schemas.
 */
class BillingAddressSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractAddressSchema
{
    /**
     * The schema item identifier.
     *
     * @var string
     */
    public const IDENTIFIER = 'billing-address';
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'billing_address';
    /**
     * Term properties.
     *
     * @return array
     */
    public function get_properties()
{
}
    /**
     * Sanitize and format the given address object.
     *
     * @param array            $address Value being sanitized.
     * @param \WP_REST_Request $request The Request.
     * @param string           $param The param being sanitized.
     * @return array
     */
    public function sanitize_callback($address, $request, $param)
{
}
    /**
     * Validate the given address object.
     *
     * @param array            $address Value being validated.
     * @param \WP_REST_Request $request The Request.
     * @param string           $param The param being validated.
     * @return true|\WP_Error
     */
    public function validate_callback($address, $request, $param)
{
}
    /**
     * Convert a term object into an object suitable for the response.
     *
     * @param \WC_Order|\WC_Customer $address An object with billing address.
     *
     * @throws RouteException When the invalid object types are provided.
     * @return array
     */
    public function get_item_response($address)
{
}
}