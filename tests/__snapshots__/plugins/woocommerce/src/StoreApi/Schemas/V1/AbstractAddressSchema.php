<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * AddressSchema class.
 *
 * Provides a generic address schema for composition in other schemas.
 */
abstract class AbstractAddressSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * Additional fields controller.
     *
     * @var CheckoutFields
     */
    protected $additional_fields_controller;
    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend ExtendSchema instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, Automattic\WooCommerce\StoreApi\SchemaController $controller)
{
}
    /**
     * Term properties.
     *
     * @internal Note that required properties don't require values, just that they are included in the request.
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
     * @see rest_validate_value_from_schema
     *
     * @param array            $address Value being sanitized.
     * @param \WP_REST_Request $request The Request.
     * @param string           $param The param being sanitized.
     * @return true|\WP_Error
     */
    public function validate_callback($address, $request, $param)
{
}
    /**
     * Get additional address fields schema.
     *
     * @return array
     */
    protected function get_additional_address_fields_schema()
{
}
}