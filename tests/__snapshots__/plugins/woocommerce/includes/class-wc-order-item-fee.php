<?php

/**
 * Order item fee.
 */
class WC_Order_Item_Fee
{
    /**
     * Legacy fee data.
     *
     * @deprecated 4.4.0 For legacy actions.
     * @var object
     */
    public $legacy_fee = '';

    /**
     * Legacy fee key.
     *
     * @deprecated 4.4.0 For legacy actions.
     * @var string
     */
    public $legacy_fee_key = '';

    /**
     * Order Data array. This is the core order data exposed in APIs since 3.0.0.
     *
     * @since 3.0.0
     * @var array
     */
    protected $extra_data = array (
  'tax_class' => '',
  'tax_status' => 'taxable',
  'amount' => '',
  'total' => '',
  'total_tax' => '',
  'taxes' => 
  array (
    'total' => 
    array (
    ),
  ),
);

    /**
     * Get item costs grouped by tax class.
     *
     * @since  3.2.0
     * @param  WC_Order $order Order object.
     * @return array
     */
    protected function get_tax_class_costs($order)
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
     * Set fee amount.
     *
     * @param string $value Amount.
     */
    public function set_amount($value)
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
     * Set tax_status.
     *
     * @param string $value Tax status.
     */
    public function set_tax_status($value)
    {
        // stub
    }

    /**
     * Set total.
     *
     * @param string $amount Fee amount (do not enter negative amounts).
     */
    public function set_total($amount)
    {
        // stub
    }

    /**
     * Set total tax.
     *
     * @param string $amount Amount.
     */
    public function set_total_tax($amount)
    {
        // stub
    }

    /**
     * Set taxes.
     *
     * This is an array of tax ID keys with total amount values.
     *
     * @param array $raw_tax_data Raw tax data.
     */
    public function set_taxes($raw_tax_data)
    {
        // stub
    }

    /**
     * Get fee amount.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_amount($context = 'view')
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
     * Get order item type.
     *
     * @return string
     */
    public function get_type()
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
     * Get tax status.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_tax_status($context = 'view')
    {
        // stub
    }

    /**
     * Get total fee.
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
     * Get fee taxes.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_taxes($context = 'view')
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
     * OffsetExists for ArrayAccess
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
