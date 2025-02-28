<?php

/**
 * Shipping rate class.
 */
class WC_Shipping_Rate
{
    /**
     * Stores data for this rate.
     *
     * @since 3.2.0
     * @var   array
     */
    protected $data = array('id' => '', 'method_id' => '', 'instance_id' => 0, 'label' => '', 'cost' => 0, 'taxes' => array(), 'tax_status' => 'taxable');
    /**
     * Stores meta data for this rate.
     *
     * @since 2.6.0
     * @var   array
     */
    protected $meta_data = array();
    /**
     * Constructor.
     *
     * @param string  $id          Shipping rate ID.
     * @param string  $label       Shipping rate label.
     * @param integer $cost        Cost.
     * @param array   $taxes       Taxes applied to shipping rate.
     * @param string  $method_id   Shipping method ID.
     * @param int     $instance_id Shipping instance ID.
     * @param string  $tax_status  Tax status.
     */
    public function __construct($id = '', $label = '', $cost = 0, $taxes = array(), $method_id = '', $instance_id = 0, $tax_status = 'taxable')
    {
    }
    /**
     * Magic methods to support direct access to props.
     *
     * @since 3.2.0
     * @param string $key Key.
     * @return bool
     */
    public function __isset($key)
    {
    }
    /**
     * Magic methods to support direct access to props.
     *
     * @since 3.2.0
     * @param string $key Key.
     * @return mixed
     */
    public function __get($key)
    {
    }
    /**
     * Magic methods to support direct access to props.
     *
     * @since 3.2.0
     * @param string $key   Key.
     * @param mixed  $value Value.
     */
    public function __set($key, $value)
    {
    }
    /**
     * Set ID for the rate. This is usually a combination of the method and instance IDs.
     *
     * @since 3.2.0
     * @param string $id Shipping rate ID.
     */
    public function set_id($id)
    {
    }
    /**
     * Set shipping method ID the rate belongs to.
     *
     * @since 3.2.0
     * @param string $method_id Shipping method ID.
     */
    public function set_method_id($method_id)
    {
    }
    /**
     * Set instance ID the rate belongs to.
     *
     * @since 3.2.0
     * @param int $instance_id Instance ID.
     */
    public function set_instance_id($instance_id)
    {
    }
    /**
     * Set rate label.
     *
     * @since 3.2.0
     * @param string $label Shipping rate label.
     */
    public function set_label($label)
    {
    }
    /**
     * Set rate cost.
     *
     * @todo 4.0 Prevent negative value being set. #19293
     * @since 3.2.0
     * @param string $cost Shipping rate cost.
     */
    public function set_cost($cost)
    {
    }
    /**
     * Set rate taxes.
     *
     * @since 3.2.0
     * @param array $taxes List of taxes applied to shipping rate.
     */
    public function set_taxes($taxes)
    {
    }
    /**
     * Set tax status.
     *
     * @since 9.6.0
     * @param string $value Tax status.
     */
    public function set_tax_status($value)
    {
    }
    /**
     * Get ID for the rate. This is usually a combination of the method and instance IDs.
     *
     * @since 3.2.0
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Get shipping method ID the rate belongs to.
     *
     * @since 3.2.0
     * @return string
     */
    public function get_method_id()
    {
    }
    /**
     * Get instance ID the rate belongs to.
     *
     * @since 3.2.0
     * @return int
     */
    public function get_instance_id()
    {
    }
    /**
     * Get rate label.
     *
     * @return string
     */
    public function get_label()
    {
    }
    /**
     * Get rate cost.
     *
     * @since 3.2.0
     * @return string
     */
    public function get_cost()
    {
    }
    /**
     * Get rate taxes.
     *
     * @since 3.2.0
     * @return array
     */
    public function get_taxes()
    {
    }
    /**
     * Get shipping tax.
     *
     * @return float
     */
    public function get_shipping_tax()
    {
    }
    /**
     * Get tax status.
     *
     * @return string
     */
    public function get_tax_status()
    {
    }
    /**
     * Add some meta data for this rate.
     *
     * @since 2.6.0
     * @param string $key   Key.
     * @param string $value Value.
     */
    public function add_meta_data($key, $value)
    {
    }
    /**
     * Get all meta data for this rate.
     *
     * @since 2.6.0
     * @return array
     */
    public function get_meta_data()
    {
    }
}