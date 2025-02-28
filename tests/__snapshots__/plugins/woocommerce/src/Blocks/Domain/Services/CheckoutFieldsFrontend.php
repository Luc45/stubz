<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class managing checkout fields and its related extensibility points on the frontend.
 */
class CheckoutFieldsFrontend
{
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
     * Render custom fields.
     *
     * @param array $fields List of additional fields with values.
     * @return string
     */
    protected function render_additional_fields($fields)
{
}
    /**
     * Render custom field.
     *
     * @param array $field An additional field and value.
     * @return string
     */
    protected function render_additional_field($field)
{
}
    /**
     * Renders address fields on the order details page.
     *
     * @param string   $address_type Type of address (billing or shipping).
     * @param WC_Order $order Order object.
     */
    public function render_order_address_fields($address_type, $order)
{
}
    /**
     * Renders additional fields on the order details page.
     *
     * @param WC_Order $order Order object.
     */
    public function render_order_other_fields($order)
{
}
    /**
     * Renders address fields on the account page.
     *
     * @param string $address_type Type of address (billing or shipping).
     */
    public function render_address_fields($address_type)
{
}
    /**
     * Register required additional contact fields.
     *
     * @param array $fields Required fields.
     * @return array
     */
    public function edit_account_form_required_fields($fields)
{
}
    /**
     * Adds additional contact fields to the My Account edit account form.
     */
    public function edit_account_form_fields()
{
}
    /**
     * Validates and saves additional address fields to the customer object on the My Account page.
     *
     * Customer is not provided by this hook so we handle save here.
     *
     * @param integer $user_id User ID.
     */
    public function save_account_form_fields($user_id)
{
}
    /**
     * Adds additional address fields to the My Account edit address form.
     *
     * @param array  $address Address fields.
     * @param string $address_type Type of address (billing or shipping).
     * @return array Updated address fields.
     */
    public function edit_address_fields($address, $address_type)
{
}
    /**
     * For the My Account page, save address fields. This uses the Store API endpoint for saving addresses so
     * extensibility hooks are consistent across the codebase.
     *
     * The caller saves the customer object if there are no errors. Nonces are checked before this method executes.
     *
     * @param integer     $user_id User ID.
     * @param string      $address_type Type of address (billing or shipping).
     * @param array       $address Address fields.
     * @param WC_Customer $customer Customer object.
     */
    public function save_address_fields($user_id, $address_type, $address, $customer)
{
}
}