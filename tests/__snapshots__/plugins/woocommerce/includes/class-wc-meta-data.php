<?php

/**
 * Meta data class.
 */
class WC_Meta_Data implements \JsonSerializable
{
    /**
     * Current data for metadata
     *
     * @since 3.2.0
     * @var array
     */
    protected $current_data = null;

    /**
     * Metadata data
     *
     * @since 3.2.0
     * @var array
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $meta Data to wrap behind this function.
     */
    public function __construct($meta = array())
{
}
    /**
     * When converted to JSON.
     *
     * @return object|array
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize()
{
}
    /**
     * Merge changes with data and clear.
     */
    public function apply_changes()
{
}
    /**
     * Creates or updates a property in the metadata object.
     *
     * @param string $key Key to set.
     * @param mixed  $value Value to set.
     */
    public function __set($key, $value)
{
}
    /**
     * Checks if a given key exists in our data. This is called internally
     * by `empty` and `isset`.
     *
     * @param string $key Key to check if set.
     *
     * @return bool
     */
    public function __isset($key)
{
}
    /**
     * Returns the value of any property.
     *
     * @param string $key Key to get.
     * @return mixed Property value or NULL if it does not exists
     */
    public function __get($key)
{
}
    /**
     * Return data changes only.
     *
     * @return array
     */
    public function get_changes()
{
}
    /**
     * Return all data as an array.
     *
     * @return array
     */
    public function get_data()
{
}
}
