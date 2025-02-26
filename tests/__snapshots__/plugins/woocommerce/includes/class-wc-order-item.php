<?php

namespace ;

/**
 * Order item class.
 */
class WC_Order_Item
{
    /**
     * Legacy cart item values.
     *
     * @deprecated 4.4.0 For legacy actions.
     * @var array
     */
    public $legacy_values = null;

    /**
     * Legacy cart item keys.
     *
     * @deprecated 4.4.0 For legacy actions.
     * @var string
     */
    public $legacy_cart_item_key = null;

    /**
     * Order Data array. This is the core order data exposed in APIs since 3.0.0.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array (
  'order_id' => 0,
  'name' => '',
);

    /**
     * Stores meta in cache for future reads.
     * A group must be set to to enable caching.
     *
     * @var string
     */
    protected $cache_group = 'order-items';

    /**
     * Meta type. This should match up with
     * the types available at https://developer.wordpress.org/reference/functions/add_metadata/.
     * WP defines 'post', 'user', 'comment', and 'term'.
     *
     * @var string
     */
    protected $meta_type = 'order_item';

    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'order_item';

    /**
     * Legacy package key.
     *
     * @deprecated 4.4.0 For legacy actions.
     * @var string
     */
    public $legacy_package_key = null;

    /**
     * Constructor.
     *
     * @param int|object|array $item ID to load from the DB, or WC_Order_Item object.
     */
    public function __construct($item = 0)
    {
        // stub
    }

    /**
     * Merge changes with data and clear.
     * Overrides WC_Data::apply_changes.
     * array_replace_recursive does not work well for order items because it merges taxes instead
     * of replacing them.
     *
     * @since 3.2.0
     */
    public function apply_changes()
    {
        // stub
    }

    /**
     * Get order ID this meta belongs to.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_order_id($context = 'view')
    {
        // stub
    }

    /**
     * Get order item name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_name($context = 'view')
    {
        // stub
    }

    /**
     * Get order item type. Overridden by child classes.
     *
     * @return string
     */
    public function get_type()
    {
        // stub
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function get_quantity()
    {
        // stub
    }

    /**
     * Get tax status.
     *
     * @return string
     */
    public function get_tax_status()
    {
        // stub
    }

    /**
     * Get tax class.
     *
     * @return string
     */
    public function get_tax_class()
    {
        // stub
    }

    /**
     * Get parent order object.
     *
     * @return WC_Order
     */
    public function get_order()
    {
        // stub
    }

    /**
     * Set order ID.
     *
     * @param int $value Order ID.
     */
    public function set_order_id($value)
    {
        // stub
    }

    /**
     * Set order item name.
     *
     * @param string $value Item name.
     */
    public function set_name($value)
    {
        // stub
    }

    /**
     * Type checking.
     *
     * @param  string|array $type Type.
     * @return boolean
     */
    public function is_type($type)
    {
        // stub
    }

    /**
     * Calculate item taxes.
     *
     * @since  3.2.0
     * @param  array $calculate_tax_for Location data to get taxes for. Required.
     * @return bool  True if taxes were calculated.
     */
    public function calculate_taxes($calculate_tax_for = array (
))
    {
        // stub
    }

    /**
     * Wrapper for get_formatted_meta_data that includes all metadata by default. See https://github.com/woocommerce/woocommerce/pull/30948
     *
     * @param string $hideprefix  Meta data prefix, (default: _).
     * @param bool   $include_all Include all meta data, this stop skip items with values already in the product name.
     * @return array
     */
    public function get_all_formatted_meta_data($hideprefix = '_', $include_all = true)
    {
        // stub
    }

    /**
     * Expands things like term slugs before return.
     *
     * @param string $hideprefix  Meta data prefix, (default: _).
     * @param bool   $include_all Include all meta data, this stop skip items with values already in the product name.
     * @return array
     */
    public function get_formatted_meta_data($hideprefix = '_', $include_all = false)
    {
        // stub
    }

    /**
     * OffsetSet for ArrayAccess.
     *
     * @param string $offset Offset.
     * @param mixed  $value  Value.
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        // stub
    }

    /**
     * OffsetUnset for ArrayAccess.
     *
     * @param string $offset Offset.
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        // stub
    }

    /**
     * OffsetExists for ArrayAccess.
     *
     * @param string $offset Offset.
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        // stub
    }

    /**
     * OffsetGet for ArrayAccess.
     *
     * @param string $offset Offset.
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        // stub
    }

    /**
     * Indicates if the current order item has an associated Cost of Goods Sold value.
     *
     * Derived classes representing line items that have a COGS value
     * should override this method to return "true" and also the 'calculate_cogs_value_core' method.
     *
     * @since 9.5.0
     *
     * @return bool True if this line item has an associated Cost of Goods Sold value.
     */
    public function has_cogs(): bool
    {
        // stub
    }

    /**
     * Calculate the Cost of Goods Sold value and set it as the actual value for this line item.
     *
     * @since 9.5.0
     *
     * @return bool True if the value has been calculated successfully (and set as the actual value), false otherwise (and the value hasn't changed).
     * @throws Exception The class doesn't implement its own version of calculate_cogs_value_core. Derived classes are expected to override that method when has_cogs returns true.
     */
    public function calculate_cogs_value(): bool
    {
        // stub
    }

    /**
     * Core method to calculate the Cost of Goods Sold value for this line item:
     * it doesn't check if COGS is enabled at class or system level, doesn't fire hooks, and doesn't set the value as the current one for the line item.
     *
     * @return float|null The calculated value, or null if the value can't be calculated for some reason.
     * @throws Exception The class doesn't implement its own version of this method. Derived classes are expected to override this method when has_cogs returns true.
     */
    protected function calculate_cogs_value_core(): float|null
    {
        // stub
    }

    /**
     * Get the value of the Cost of Goods Sold for this order item.
     *
     * WARNING! If the Cost of Goods Sold feature is disabled this method will always return zero.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     * @return float The current value for this order item.
     */
    public function get_cogs_value($context = 'view'): float
    {
        // stub
    }

    /**
     * Set the value of the Cost of Goods Sold for this order item.
     * Usually you'll want to use calculate_cogs_value instead.
     *
     * WARNING! If the Cost of Goods Sold feature is disabled this method will have no effect.
     *
     * @param float $value The value to set for this order item.
     *
     * @internal This method is intended for data store usage only, the value set here will be overridden by calculate_cogs_value.
     */
    public function set_cogs_value(float $value): void
    {
        // stub
    }

}

