<?php

namespace ;

/**
 * Product attribute class.
 */
class WC_Product_Attribute extends \ implements \ArrayAccess
{
    /**
     * Data array.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array(
  'id' => 0,
  'name' => '',
  'options' => 
  array(
  ),
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
        // stub
    }

    /**
     * Get taxonomy name if applicable.
     *
     * @return string
     */
    public function get_taxonomy()
    {
        // stub
    }

    /**
     * Get taxonomy object.
     *
     * @return array|null
     */
    public function get_taxonomy_object()
    {
        // stub
    }

    /**
     * Gets terms from the stored options.
     *
     * @return array|null
     */
    public function get_terms()
    {
        // stub
    }

    /**
     * Gets slugs from the stored options, or just the string if text based.
     *
     * @return array
     */
    public function get_slugs()
    {
        // stub
    }

    /**
     * Returns all data for this object.
     *
     * @return array
     */
    public function get_data()
    {
        // stub
    }

    /**
     * Set ID (this is the attribute ID).
     *
     * @param int $value Attribute ID.
     */
    public function set_id($value)
    {
        // stub
    }

    /**
     * Set name (this is the attribute name or taxonomy).
     *
     * @param string $value Attribute name.
     */
    public function set_name($value)
    {
        // stub
    }

    /**
     * Set options.
     *
     * @param array $value Attribute options.
     */
    public function set_options($value)
    {
        // stub
    }

    /**
     * Set position.
     *
     * @param int $value Attribute position.
     */
    public function set_position($value)
    {
        // stub
    }

    /**
     * Set if visible.
     *
     * @param bool $value If is visible on Product's additional info tab.
     */
    public function set_visible($value)
    {
        // stub
    }

    /**
     * Set if variation.
     *
     * @param bool $value If is used for variations.
     */
    public function set_variation($value)
    {
        // stub
    }

    /**
     * Get the ID.
     *
     * @return int
     */
    public function get_id()
    {
        // stub
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function get_name()
    {
        // stub
    }

    /**
     * Get options.
     *
     * @return array
     */
    public function get_options()
    {
        // stub
    }

    /**
     * Get position.
     *
     * @return int
     */
    public function get_position()
    {
        // stub
    }

    /**
     * Get if visible.
     *
     * @return bool
     */
    public function get_visible()
    {
        // stub
    }

    /**
     * Get if variation.
     *
     * @return bool
     */
    public function get_variation()
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * OffsetUnset.
     *
     * @param string $offset Offset.
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        // stub
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
        // stub
    }

}

