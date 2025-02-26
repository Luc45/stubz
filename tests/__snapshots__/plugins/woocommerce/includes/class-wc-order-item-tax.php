<?php

namespace ;

/**
 * Order item tax.
 */
class WC_Order_Item_Tax extends \WC_Order_Item
{
    /**
     * Order Data array. This is the core order data exposed in APIs since 3.0.0.
     *
     * @since 3.0.0
     * @var array
     */
    protected $extra_data = array(
  'rate_code' => '',
  'rate_id' => 0,
  'label' => '',
  'compound' => false,
  'tax_total' => 0,
  'shipping_tax_total' => 0,
  'rate_percent' => null,
);

    /**
     * Set order item name.
     *
     * @param string $value Name.
     */
    public function set_name($value)
    {
        // stub
    }

    /**
     * Set item name.
     *
     * @param string $value Rate code.
     */
    public function set_rate_code($value)
    {
        // stub
    }

    /**
     * Set item name.
     *
     * @param string $value Label.
     */
    public function set_label($value)
    {
        // stub
    }

    /**
     * Set tax rate id.
     *
     * @param int $value Rate ID.
     */
    public function set_rate_id($value)
    {
        // stub
    }

    /**
     * Set tax total.
     *
     * @param string $value Tax total.
     */
    public function set_tax_total($value)
    {
        // stub
    }

    /**
     * Set shipping tax total.
     *
     * @param string $value Shipping tax total.
     */
    public function set_shipping_tax_total($value)
    {
        // stub
    }

    /**
     * Set compound.
     *
     * @param bool $value If tax is compound.
     */
    public function set_compound($value)
    {
        // stub
    }

    /**
     * Set rate value.
     *
     * @param float $value tax rate value.
     */
    public function set_rate_percent($value)
    {
        // stub
    }

    /**
     * Set properties based on passed in tax rate by ID.
     *
     * @param int $tax_rate_id Tax rate ID.
     */
    public function set_rate($tax_rate_id)
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
     * Get rate code/name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_name($context = 'view')
    {
        // stub
    }

    /**
     * Get rate code/name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_rate_code($context = 'view')
    {
        // stub
    }

    /**
     * Get label.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_label($context = 'view')
    {
        // stub
    }

    /**
     * Get tax rate ID.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_rate_id($context = 'view')
    {
        // stub
    }

    /**
     * Get tax_total
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_tax_total($context = 'view')
    {
        // stub
    }

    /**
     * Get shipping_tax_total
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_tax_total($context = 'view')
    {
        // stub
    }

    /**
     * Get compound.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_compound($context = 'view')
    {
        // stub
    }

    /**
     * Is this a compound tax rate?
     *
     * @return boolean
     */
    public function is_compound()
    {
        // stub
    }

    /**
     * Get rate value
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return float
     */
    public function get_rate_percent($context = 'view')
    {
        // stub
    }

    /**
     * O for ArrayAccess/Backwards compatibility.
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

}

