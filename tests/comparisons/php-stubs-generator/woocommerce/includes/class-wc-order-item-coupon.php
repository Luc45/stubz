<?php

/**
 * Order item coupon class.
 */
class WC_Order_Item_Coupon extends \WC_Order_Item
{
    /**
     * Order Data array. This is the core order data exposed in APIs since 3.0.0.
     *
     * @since 3.0.0
     * @var array
     */
    protected $extra_data = array('code' => '', 'discount' => 0, 'discount_tax' => 0);
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    */
    /**
     * Set order item name.
     *
     * @param string $value Coupon code.
     */
    public function set_name($value)
    {
    }
    /**
     * Set code.
     *
     * @param string $value Coupon code.
     */
    public function set_code($value)
    {
    }
    /**
     * Set discount amount.
     *
     * @param string $value Discount.
     */
    public function set_discount($value)
    {
    }
    /**
     * Set discounted tax amount.
     *
     * @param string $value Discount tax.
     */
    public function set_discount_tax($value)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Get order item type.
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Get order item name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_name($context = 'view')
    {
    }
    /**
     * Get coupon code.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_code($context = 'view')
    {
    }
    /**
     * Get discount amount.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_discount($context = 'view')
    {
    }
    /**
     * Get discounted tax amount.
     *
     * @param string $context What the value is for. Valid values are 'view' and 'edit'.
     *
     * @return string
     */
    public function get_discount_tax($context = 'view')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Array Access Methods
    |--------------------------------------------------------------------------
    |
    | For backwards compatibility with legacy arrays.
    |
    */
    /**
     * OffsetGet for ArrayAccess/Backwards compatibility.
     *
     * @deprecated 4.4.0
     * @param string $offset Offset.
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * OffsetSet for ArrayAccess/Backwards compatibility.
     *
     * @deprecated 4.4.0
     * @param string $offset Offset.
     * @param mixed  $value  Value.
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    /**
     * OffsetExists for ArrayAccess.
     *
     * @param string $offset Offset.
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
}