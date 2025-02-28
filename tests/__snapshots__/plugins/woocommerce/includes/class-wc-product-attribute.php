<?php
/**
 * Product attribute class.
 */
class WC_Product_Attribute implements \ArrayAccess
{
    /**
     * Data array.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array (
  'id' => 0,
  'name' => '',
  'options' => 
  array(),
  'position' => 0,
  'visible' => false,
  'variation' => false,
);
    /**
     * Return if this attribute is a taxonomy.
     *
     * @return boolean
     */
    public function is_taxonomy()
{
}
    /**
     * Get taxonomy name if applicable.
     *
     * @return string
     */
    public function get_taxonomy()
{
}
    /**
     * Get taxonomy object.
     *
     * @return array|null
     */
    public function get_taxonomy_object()
{
}
    /**
     * Gets terms from the stored options.
     *
     * @return array|null
     */
    public function get_terms()
{
}
    /**
     * Gets slugs from the stored options, or just the string if text based.
     *
     * @return array
     */
    public function get_slugs()
{
}
    /**
     * Returns all data for this object.
     *
     * @return array
     */
    public function get_data()
{
}
    /**
     * Set ID (this is the attribute ID).
     *
     * @param int $value Attribute ID.
     */
    public function set_id($value)
{
}
    /**
     * Set name (this is the attribute name or taxonomy).
     *
     * @param string $value Attribute name.
     */
    public function set_name($value)
{
}
    /**
     * Set options.
     *
     * @param array $value Attribute options.
     */
    public function set_options($value)
{
}
    /**
     * Set position.
     *
     * @param int $value Attribute position.
     */
    public function set_position($value)
{
}
    /**
     * Set if visible.
     *
     * @param bool $value If is visible on Product's additional info tab.
     */
    public function set_visible($value)
{
}
    /**
     * Set if variation.
     *
     * @param bool $value If is used for variations.
     */
    public function set_variation($value)
{
}
    /**
     * Get the ID.
     *
     * @return int
     */
    public function get_id()
{
}
    /**
     * Get name.
     *
     * @return string
     */
    public function get_name()
{
}
    /**
     * Get options.
     *
     * @return array
     */
    public function get_options()
{
}
    /**
     * Get position.
     *
     * @return int
     */
    public function get_position()
{
}
    /**
     * Get if visible.
     *
     * @return bool
     */
    public function get_visible()
{
}
    /**
     * Get if variation.
     *
     * @return bool
     */
    public function get_variation()
{
}
    /**
     * OffsetGet.
     *
     * @param string $offset Offset.
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
{
}
    /**
     * OffsetSet.
     *
     * @param string $offset Offset.
     * @param mixed  $value  Value.
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
{
}
    /**
     * OffsetUnset.
     *
     * @param string $offset Offset.
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
{
}
    /**
     * OffsetExists.
     *
     * @param string $offset Offset.
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
{
}
}
