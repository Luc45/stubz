<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class managing checkout fields and its related extensibility points.
 */
class CheckoutFields
{
    /**
     * Groups of fields to be saved.
     *
     * @var array
     */
    protected $groups = ['billing', 'shipping', 'other'];
    /**
     * Billing fields meta key.
     *
     * @var string
     */
    public const BILLING_FIELDS_PREFIX = '_wc_billing/';
    /**
     * Shipping fields meta key.
     *
     * @var string
     */
    public const SHIPPING_FIELDS_PREFIX = '_wc_shipping/';
    /**
     * Additional fields meta key.
     *
     * @var string
     * @deprecated 8.9.0 Use OTHER_FIELDS_PREFIX instead.
     */
    public const ADDITIONAL_FIELDS_PREFIX = '_wc_additional/';
    /**
     * Other fields meta key.
     *
     * @var string
     */
    public const OTHER_FIELDS_PREFIX = '_wc_other/';
    /**
     * Sets up core fields.
     *
     * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
    {
    }
    /**
     * Initialize hooks.
     */
    public function init()
    {
    }
    /**
     * Add fields data to the asset data registry.
     */
    public function add_fields_data()
    {
    }
    /**
     * Add session meta keys.
     *
     * This is an allow-list of meta data keys which we want to store in session.
     *
     * @param array $keys Session meta keys.
     * @return array
     */
    public function add_session_meta_keys($keys)
    {
    }
    /**
     * If a field does not declare a sanitization callback, this is the default sanitization callback.
     *
     * @param mixed $value Value to sanitize.
     * @param array $field Field data.
     * @return mixed
     */
    public function default_sanitize_callback($value, $field)
    {
    }
    /**
     * If a field does not declare a validation callback, this is the default validation callback.
     *
     * @param mixed $value Value to sanitize.
     * @param array $field Field data.
     * @return WP_Error|void If there is a validation error, return an WP_Error object.
     */
    public function default_validate_callback($value, $field)
    {
    }
    /**
     * Registers an additional field for Checkout.
     *
     * @param array $options The field options.
     *
     * @return WP_Error|void True if the field was registered, a WP_Error otherwise.
     */
    public function register_checkout_field($options)
    {
    }
    /**
     * Deregister a checkout field.
     *
     * @param string $field_id The field ID.
     *
     * @internal
     */
    public function deregister_checkout_field($field_id)
    {
    }
    /**
     * Returns the keys of all core fields.
     *
     * @return array An array of field keys.
     */
    public function get_core_fields_keys()
    {
    }
    /**
     * Returns an array of all core fields.
     *
     * @return array An array of fields.
     */
    public function get_core_fields()
    {
    }
    /**
     * Returns an array of all additional fields.
     *
     * @return array An array of fields.
     */
    public function get_additional_fields()
    {
    }
    /**
     * Gets the location of a field.
     *
     * @param string $field_key The key of the field to get the location for.
     * @return string The location of the field.
     */
    public function get_field_location($field_key)
    {
    }
    /**
     * Sanitize an additional field against any custom sanitization rules.
     *
     * @since 8.7.0
     * @param string $field_key   The key of the field.
     * @param mixed  $field_value The value of the field.
     * @return mixed
     */
    public function sanitize_field($field_key, $field_value)
    {
    }
    /**
     * Validate an additional field against any custom validation rules.
     *
     * @since 8.6.0
     *
     * @param string $field_key    The key of the field.
     * @param mixed  $field_value  The value of the field.
     * @return WP_Error
     */
    public function validate_field($field_key, $field_value)
    {
    }
    /**
     * Update the default locale with additional fields without country limitations.
     *
     * @param array $locale The locale to update.
     * @return mixed
     */
    public function update_default_locale_with_fields($locale)
    {
    }
    /**
     * Returns an array of fields keys for the address location.
     *
     * @return array An array of fields keys.
     */
    public function get_address_fields_keys()
    {
    }
    /**
     * Returns an array of fields keys for the contact location.
     *
     * @return array An array of fields keys.
     */
    public function get_contact_fields_keys()
    {
    }
    /**
     * Returns an array of fields keys for the additional area location.
     *
     * @return array An array of fields keys.
     * @deprecated 8.9.0 Use get_order_fields_keys instead.
     */
    public function get_additional_fields_keys()
    {
    }
    /**
     * Returns an array of fields keys for the additional area group.
     *
     * @return array An array of fields keys.
     */
    public function get_order_fields_keys()
    {
    }
    /**
     * Returns an array of fields for a given location.
     *
     * @param string $location The location to get fields for (address|contact|order).
     * @return array An array of fields definitions.
     */
    public function get_fields_for_location($location)
    {
    }
    /**
     * Validates a set of fields for a given location against custom validation rules.
     *
     * @param array  $fields Array of key value pairs of field values to validate.
     * @param string $location The location being validated (address|contact|order).
     * @param string $group The group to get the field value for (shipping|billing|other).
     * @return WP_Error
     */
    public function validate_fields_for_location($fields, $location, $group = 'other')
    {
    }
    /**
     * Validates a field to check it belongs to the given location and is valid according to its registration.
     *
     * This does not apply any custom validation rules on the value.
     *
     * @param string $key The field key.
     * @param mixed  $value The field value.
     * @param string $location The location to validate the field for (address|contact|order).
     *
     * @return true|WP_Error True if the field is valid, a WP_Error otherwise.
     */
    public function validate_field_for_location($key, $value, $location)
    {
    }
    /**
     * Returns all fields key for a given group.
     *
     * @param string $group The group to get the key for (shipping|billing|other).
     *
     * @return string[] Field keys.
     */
    public function get_fields_for_group($group = 'other')
    {
    }
    /**
     * Returns true if the given key is a valid field.
     *
     * @param string $key The field key.
     *
     * @return bool True if the field is valid, false otherwise.
     */
    public function is_field($key)
    {
    }
    /**
     * Returns true if the given key is a valid customer field.
     *
     * Customer fields are fields saved to the customer data, like address and contact fields.
     *
     * @param string $key The field key.
     *
     * @return bool True if the field is valid, false otherwise.
     */
    public function is_customer_field($key)
    {
    }
    /**
     * Persists a field value for a given order. This would also optionally set the field value on the customer object if the order is linked to a registered customer.
     *
     * @param string   $key The field key.
     * @param mixed    $value The field value.
     * @param WC_Order $order The order to persist the field for.
     * @param string   $group The group to persist the field for (shipping|billing|other).
     * @param bool     $set_customer Whether to set the field value on the customer or not.
     *
     * @return void
     */
    public function persist_field_for_order(string $key, $value, \WC_Order $order, string $group = 'other', bool $set_customer = true)
    {
    }
    /**
     * Persists a field value for a given customer.
     *
     * @param string      $key The field key.
     * @param mixed       $value The field value.
     * @param WC_Customer $customer The customer to persist the field for.
     * @param string      $group The group to persist the field for (shipping|billing|other).
     *
     * @return void
     */
    public function persist_field_for_customer(string $key, $value, \WC_Customer $customer, string $group = 'other')
    {
    }
    /**
     * Returns a field value for a given object.
     *
     * @param string               $key The field key.
     * @param WC_Customer|WC_Order $wc_object The customer or order to get the field value for.
     * @param string               $group The group to get the field value for (shipping|billing|other).
     *
     * @return mixed The field value.
     */
    public function get_field_from_object(string $key, \WC_Data $wc_object, string $group = 'other')
    {
    }
    /**
     * Returns an array of all fields values for a given object in a group.
     *
     * @param WC_Data $wc_object The object or order to get the fields for.
     * @param string  $group The group to get the fields for (shipping|billing|other).
     * @param bool    $all Whether to return all fields or only the ones that are still registered. Default false.
     *
     * @return array An array of fields.
     */
    public function get_all_fields_from_object(\WC_Data $wc_object, string $group = 'other', bool $all = false)
    {
    }
    /**
     * Copies additional fields from an order to a customer.
     *
     * @param WC_Order    $order The order to sync the fields for.
     * @param WC_Customer $customer The customer to sync the fields for.
     */
    public function sync_customer_additional_fields_with_order(\WC_Order $order, \WC_Customer $customer)
    {
    }
    /**
     * Copies additional fields from a customer to an order.
     *
     * @param WC_Order    $order The order to sync the fields for.
     * @param WC_Customer $customer The customer to sync the fields for.
     */
    public function sync_order_additional_fields_with_customer(\WC_Order $order, \WC_Customer $customer)
    {
    }
    /**
     * From a set of fields, returns only the ones for a given location.
     *
     * @param array  $fields The fields to filter.
     * @param string $location The location to validate the field for (address|contact|order).
     * @return array The filtered fields.
     */
    public function filter_fields_for_location(array $fields, string $location)
    {
    }
    /**
     * Filter fields for order confirmation.
     *
     * @param array $fields The fields to filter.
     * @return array The filtered fields.
     */
    public function filter_fields_for_order_confirmation($fields)
    {
    }
    /**
     * Get additional fields for an order.
     *
     * @param WC_Order $order Order object.
     * @param string   $location The location to get fields for (address|contact|order).
     * @param string   $group The group to get the field value for (shipping|billing|other).
     * @param string   $context The context to get the field value for (edit|view).
     * @return array An array of fields definitions as well as their values formatted for display.
     */
    public function get_order_additional_fields_with_values(\WC_Order $order, string $location, string $group = 'other', string $context = 'edit')
    {
    }
    /**
     * Formats a raw field value for display based on its type definition.
     *
     * @param string $value Value to format.
     * @param array  $field Additional field definition.
     * @return string
     */
    public function format_additional_field_value($value, $field)
    {
    }
    /**
     * Returns a group meta prefix based on its name.
     *
     * @param string $group_name The group name (billing|shipping|other).
     * @return string The group meta prefix.
     */
    public static function get_group_key($group_name)
    {
    }
    /**
     * Returns a group name based on passed group key.
     *
     * @param string $group_key The group name (_wc_billing|_wc_shipping|_wc_other).
     * @return string The group meta prefix.
     */
    public static function get_group_name($group_key)
    {
    }
}
