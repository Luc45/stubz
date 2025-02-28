<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * CheckoutSchema class.
 */
class CheckoutSchema
{
    const IDENTIFIER = 'checkout';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'checkout';

    /**
     * Billing address schema instance.
     *
     * @var BillingAddressSchema
     */
    protected $billing_address_schema = null;

    /**
     * Shipping address schema instance.
     *
     * @var ShippingAddressSchema
     */
    protected $shipping_address_schema = null;

    /**
     * Image Attachment schema instance.
     *
     * @var ImageAttachmentSchema
     */
    protected $image_attachment_schema = null;

    /**
     * Additional fields controller.
     *
     * @var CheckoutFields
     */
    protected $additional_fields_controller = null;

    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, Automattic\WooCommerce\StoreApi\SchemaController $controller)
{
}
    /**
     * Checkout schema properties.
     *
     * @return array
     */
    public function get_properties()
{
}
    /**
     * Return the response for checkout.
     *
     * @param object $item Results from checkout action.
     * @return array
     */
    public function get_item_response($item)
{
}
    /**
     * Get the checkout response based on the current order and any payments.
     *
     * @param \WC_Order          $order          Order object.
     * @param PaymentResult|null $payment_result Payment result object.
     * @return array
     */
    protected function get_checkout_response(WC_Order $order, Automattic\WooCommerce\StoreApi\Payments\PaymentResult|null $payment_result = null)
{
}
    /**
     * This prepares the payment details for the response so it's following the
     * schema where it's an array of objects.
     *
     * @param array $payment_details An array of payment details from the processed payment.
     *
     * @return array An array of objects where each object has the key and value
     *               as distinct properties.
     */
    protected function prepare_payment_details_for_response(array $payment_details)
{
}
    /**
     * Get the additional fields response.
     *
     * @param \WC_Order $order Order object.
     * @return array
     */
    protected function get_additional_fields_response(WC_Order $order)
{
}
    /**
     * Get the schema for additional fields.
     *
     * @return array
     */
    protected function get_additional_fields_schema()
{
}
    /**
     * Generate the schema for additional fields.
     *
     * @param array[] ...$args One or more arrays of additional fields.
     * @return array
     */
    protected function generate_additional_fields_schema(...$args)
{
}
    /**
     * Check if any additional field is required, so that the parent item is required as well.
     *
     * @param array $additional_fields_schema Additional fields schema.
     * @return bool
     */
    protected function schema_has_required_property($additional_fields_schema)
{
}
    /**
     * Sanitize and format additional fields object.
     *
     * @param array $fields Values being sanitized.
     * @return array
     */
    public function sanitize_additional_fields($fields)
{
}
    /**
     * Validate additional fields object.
     *
     * @see rest_validate_value_from_schema
     *
     * @param array            $fields Value being sanitized.
     * @param \WP_REST_Request $request The Request.
     * @return true|\WP_Error
     */
    public function validate_additional_fields($fields, $request)
{
}
}