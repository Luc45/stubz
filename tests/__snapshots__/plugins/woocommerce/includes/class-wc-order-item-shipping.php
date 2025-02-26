<?php

namespace ;

/**
 * Order item shipping class.
 */
class WC_Order_Item_Shipping extends \WC_Order_Item
{
    /**
     * Order Data array. This is the core order data exposed in APIs since 3.0.0.
     *
     * @since 3.0.0
     * @var array
     */
    protected $extra_data = array(
  'method_title' => '',
  'method_id' => '',
  'instance_id' => '',
  'total' => 0,
  'total_tax' => 0,
  'taxes' => 
  array(
    'total' => 
    array(
    ),
  ),
  'tax_status' => 'taxable',
);

    /**
     * Calculate item taxes.
     *
     * @since  3.2.0
     * @param  array $calculate_tax_for Location data to get taxes for. Required.
     * @return bool  True if taxes were calculated.
     */
    public function calculate_taxes($calculate_tax_for = array(
))
    {
        // stub
    }

    /**
     * Set order item name.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception May throw exception if data is invalid.
     */
    public function set_name($value)
    {
        // stub
    }

    /**
     * Set method title.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception May throw exception if data is invalid.
     */
    public function set_method_title($value)
    {
        // stub
    }

    /**
     * Set shipping method id.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception May throw exception if data is invalid.
     */
    public function set_method_id($value)
    {
        // stub
    }

    /**
     * Set shipping instance id.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception May throw exception if data is invalid.
     */
    public function set_instance_id($value)
    {
        // stub
    }

    /**
     * Set total.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception May throw exception if data is invalid.
     */
    public function set_total($value)
    {
        // stub
    }

    /**
     * Set total tax.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception May throw exception if data is invalid.
     */
    protected function set_total_tax($value)
    {
        // stub
    }

    /**
     * Set taxes.
     *
     * This is an array of tax ID keys with total amount values.
     *
     * @param array $raw_tax_data Value to set.
     * @throws WC_Data_Exception May throw exception if data is invalid.
     */
    public function set_taxes($raw_tax_data)
    {
        // stub
    }

    /**
     * Set tax_status.
     *
     * @param string $value Tax status.
     * @deprecated 9.7.0 order shipping lines don't support setting tax status, hook into the shipping method instead.
     *
     * @return void
     */
    public function set_tax_status($value)
    {
        // stub
    }

    /**
     * Set properties based on passed in shipping rate object.
     *
     * @param WC_Shipping_Rate $shipping_rate Shipping rate to set.
     */
    public function set_shipping_rate($shipping_rate)
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
     * Get order item name.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_name($context = 'view')
    {
        // stub
    }

    /**
     * Get title.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_method_title($context = 'view')
    {
        // stub
    }

    /**
     * Get method ID.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_method_id($context = 'view')
    {
        // stub
    }

    /**
     * Get instance ID.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_instance_id($context = 'view')
    {
        // stub
    }

    /**
     * Get total cost.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_total($context = 'view')
    {
        // stub
    }

    /**
     * Get total tax.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_total_tax($context = 'view')
    {
        // stub
    }

    /**
     * Get taxes.
     *
     * @param  string $context View or edit context.
     * @return array
     */
    public function get_taxes($context = 'view')
    {
        // stub
    }

    /**
     * Get tax class.
     *
     * @param  string $context View or edit context.
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
     * Offset get: for ArrayAccess/Backwards compatibility.
     *
     * @param string $offset Key.
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        // stub
    }

    /**
     * Offset set: for ArrayAccess/Backwards compatibility.
     *
     * @deprecated 4.4.0
     * @param string $offset Key.
     * @param mixed  $value Value to set.
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        // stub
    }

    /**
     * Offset exists: for ArrayAccess.
     *
     * @param string $offset Key.
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        // stub
    }

}

