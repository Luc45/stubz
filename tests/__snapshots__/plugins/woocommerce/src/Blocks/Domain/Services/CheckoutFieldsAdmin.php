<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class managing checkout fields and its related extensibility points in the admin area.
 */
class CheckoutFieldsAdmin
{
    /**
     * Checkout field controller.
     *
     * @var CheckoutFields
     */
    private $checkout_fields_controller = null;

    /**
     * Sets up core fields.
     *
     * @param CheckoutFields $checkout_fields_controller Instance of the checkout field controller.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Domain\Services\CheckoutFields $checkout_fields_controller)
{
}
    /**
     * Initialize hooks. This is not run Store API requests.
     */
    public function init()
{
}
    /**
     * Converts the shape of a checkout field to match whats needed in the WooCommerce meta boxes.
     *
     * @param array  $field The field to format.
     * @param string $key The field key. This will be used for the ID of the field when passed to the meta box.
     * @return array Formatted field.
     */
    protected function format_field_for_meta_box($field, $key)
{
}
    /**
     * Updates a field value for an order.
     *
     * @param string    $key The field key.
     * @param mixed     $value The field value.
     * @param \WC_Order $order The order to update the field for.
     */
    public function update_callback($key, $value, $order)
{
}
    /**
     * Injects address fields in WC admin orders screen.
     *
     * @param array             $fields The fields to show.
     * @param \WC_Order|boolean $order The order to show the fields for.
     * @param string            $context The context to show the fields for.
     * @return array
     */
    public function admin_address_fields($fields, $order = null, $context = 'edit')
{
}
    /**
     * Injects contact fields in WC admin orders screen.
     *
     * @param array             $fields The fields to show.
     * @param \WC_Order|boolean $order The order to show the fields for.
     * @param string            $context The context to show the fields for.
     * @return array
     */
    public function admin_contact_fields($fields, $order = null, $context = 'edit')
{
}
    /**
     * Injects additional fields in WC admin orders screen.
     *
     * @param array             $fields The fields to show.
     * @param \WC_Order|boolean $order The order to show the fields for.
     * @param string            $context The context to show the fields for.
     * @return array
     */
    public function admin_order_fields($fields, $order = null, $context = 'edit')
{
}
}