<?php

/**
 * Order item product class.
 */
class WC_Order_Item_Product
{
    /**
     * Legacy values.
     *
     * @deprecated 4.4.0 For legacy actions.
     * @var array
     */
    public $legacy_values = null;

    /**
     * Legacy cart item key.
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
    protected $extra_data = array (
  'product_id' => 0,
  'variation_id' => 0,
  'quantity' => 1,
  'tax_class' => '',
  'subtotal' => 0,
  'subtotal_tax' => 0,
  'total' => 0,
  'total_tax' => 0,
  'taxes' => 
  array (
    'subtotal' => 
    array (
    ),
    'total' => 
    array (
    ),
  ),
);

    /**
     * Set quantity.
     *
     * @param int $value Quantity.
     */
    public function set_quantity($value)
    {
        // stub
    }

    /**
     * Set tax class.
     *
     * @param string $value Tax class.
     */
    public function set_tax_class($value)
    {
        // stub
    }

    /**
     * Set Product ID
     *
     * @param int $value Product ID.
     */
    public function set_product_id($value)
    {
        // stub
    }

    /**
     * Set variation ID.
     *
     * @param int $value Variation ID.
     */
    public function set_variation_id($value)
    {
        // stub
    }

    /**
     * Line subtotal (before discounts).
     *
     * @param string $value Subtotal.
     */
    public function set_subtotal($value)
    {
        // stub
    }

    /**
     * Line total (after discounts).
     *
     * @param string $value Total.
     */
    public function set_total($value)
    {
        // stub
    }

    /**
     * Line subtotal tax (before discounts).
     *
     * @param string $value Subtotal tax.
     */
    public function set_subtotal_tax($value)
    {
        // stub
    }

    /**
     * Line total tax (after discounts).
     *
     * @param string $value Total tax.
     */
    public function set_total_tax($value)
    {
        // stub
    }

    /**
     * Set line taxes and totals for passed in taxes.
     *
     * @param array $raw_tax_data Raw tax data.
     */
    public function set_taxes($raw_tax_data)
    {
        // stub
    }

    /**
     * Set variation data (stored as meta data - write only).
     *
     * @param array $data Key/Value pairs.
     */
    public function set_variation($data = array (
))
    {
        // stub
    }

    /**
     * Set properties based on passed in product object.
     *
     * @param WC_Product $product Product instance.
     */
    public function set_product($product)
    {
        // stub
    }

    /**
     * Set meta data for backordered products.
     */
    public function set_backorder_meta()
    {
        // stub
    }

    /**
     * Get order item type.
     *
     * @return string
     */
    public function get_type()
    {
        // stub
    }

    /**
     * Get product ID.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_product_id($context = 'view')
    {
        // stub
    }

    /**
     * Get variation ID.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_variation_id($context = 'view')
    {
        // stub
    }

    /**
     * Get quantity.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_quantity($context = 'view')
    {
        // stub
    }

    /**
     * Get tax class.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_tax_class($context = 'view')
    {
        // stub
    }

    /**
     * Gets the item subtotal. This is the price of the item times the quantity
     * excluding taxes before coupon discounts.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_subtotal($context = 'view')
    {
        // stub
    }

    /**
     * Get subtotal tax.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_subtotal_tax($context = 'view')
    {
        // stub
    }

    /**
     * Gets the item total. This is the price of the item times the quantity
     * excluding taxes after coupon discounts.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_total($context = 'view')
    {
        // stub
    }

    /**
     * Get total tax.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_total_tax($context = 'view')
    {
        // stub
    }

    /**
     * Get taxes.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_taxes($context = 'view')
    {
        // stub
    }

    /**
     * Get the associated product.
     *
     * @return WC_Product|bool
     */
    public function get_product()
    {
        // stub
    }

    /**
     * Get the Download URL.
     *
     * @param  int $download_id Download ID.
     * @return string
     */
    public function get_item_download_url($download_id)
    {
        // stub
    }

    /**
     * Get any associated downloadable files.
     *
     * @return array
     */
    public function get_item_downloads()
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
     * OffsetGet for ArrayAccess/Backwards compatibility.
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
     * OffsetSet for ArrayAccess/Backwards compatibility.
     *
     * @deprecated 4.4.0
     * @param string $offset Offset.
     * @param mixed  $value  Value.
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
     * Indicates that product line items have an associated Cost of Goods Sold value.
     * Note that this is true even if the product has np COGS value (in that case the COGS value for the line item will be zero)-
     *
     * @return bool Always true.
     */
    public function has_cogs(): bool
    {
        // stub
    }

    /**
     * Calculate the Cost of Goods Sold value for this line item.
     *
     * @return float|null The calculated value, null if the product associated to the line item no longer exists.
     */
    public function calculate_cogs_value_core(): float|null
    {
        // stub
    }

}
