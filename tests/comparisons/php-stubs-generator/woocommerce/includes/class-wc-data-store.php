<?php

/**
 * Data store class.
 */
class WC_Data_Store
{
    /**
     * Tells WC_Data_Store which object (coupon, product, order, etc)
     * store we want to work with.
     *
     * @throws Exception When validation fails.
     * @param string $object_type Name of object.
     */
    public function __construct($object_type)
    {
    }
    /**
     * Only store the object type to avoid serializing the data store instance.
     *
     * @return array
     */
    public function __sleep()
    {
    }
    /**
     * Re-run the constructor with the object type.
     *
     * @throws Exception When validation fails.
     */
    public function __wakeup()
    {
    }
    /**
     * Loads a data store.
     *
     * @param string $object_type Name of object.
     *
     * @since 3.0.0
     * @throws Exception When validation fails.
     * @return WC_Data_Store
     */
    public static function load($object_type)
    {
    }
    /**
     * Returns the class name of the current data store.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_current_class_name()
    {
    }
    /**
     * Reads an object from the data store.
     *
     * @since 3.0.0
     * @param WC_Data $data WooCommerce data instance.
     */
    public function read(&$data)
    {
    }
    /**
     * Reads multiple objects from the data store.
     *
     * @since 6.9.0
     * @param array[WC_Data] $objects Array of object instances to read.
     */
    public function read_multiple(&$objects = array())
    {
    }
    /**
     * Create an object in the data store.
     *
     * @since 3.0.0
     * @param WC_Data $data WooCommerce data instance.
     */
    public function create(&$data)
    {
    }
    /**
     * Update an object in the data store.
     *
     * @since 3.0.0
     * @param WC_Data $data WooCommerce data instance.
     */
    public function update(&$data)
    {
    }
    /**
     * Delete an object from the data store.
     *
     * @since 3.0.0
     * @param WC_Data $data WooCommerce data instance.
     * @param array   $args Array of args to pass to the delete method.
     */
    public function delete(&$data, $args = array())
    {
    }
    /**
     * Data stores can define additional functions (for example, coupons have
     * some helper methods for increasing or decreasing usage). This passes
     * through to the instance if that function exists.
     *
     * @since 3.0.0
     * @param string $method     Method.
     * @param mixed  $parameters Parameters.
     * @return mixed
     */
    public function __call($method, $parameters)
    {
    }
    /**
     * Check if the data store we are working with has a callable method.
     *
     * @param string $method Method name.
     *
     * @return bool Whether the passed method is callable.
     */
    public function has_callable(string $method) : bool
    {
    }
}