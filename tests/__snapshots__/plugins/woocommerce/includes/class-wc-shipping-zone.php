<?php
/**
 * WC_Shipping_Zone class.
 */
class WC_Shipping_Zone extends \WC_Legacy_Shipping_Zone
{
    /**
     * Zone ID
     *
     * @var int|null
     */
    protected $id = null;
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'shipping_zone';
    /**
     * Zone Data.
     *
     * @var array
     */
    protected $data = array (
  'zone_name' => '',
  'zone_order' => 0,
  'zone_locations' => 
  array(),
);
    /**
     * Constructor for zones.
     *
     * @param int|object $zone Zone ID to load from the DB or zone object.
     */
    public function __construct($zone = null)
{
}
    /**
     * Get zone name.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_zone_name($context = 'view')
{
}
    /**
     * Get zone order.
     *
     * @param  string $context View or edit context.
     * @return int
     */
    public function get_zone_order($context = 'view')
{
}
    /**
     * Get zone locations.
     *
     * @param  string $context View or edit context.
     * @return array of zone objects
     */
    public function get_zone_locations($context = 'view')
{
}
    /**
     * Return a text string representing what this zone is for.
     *
     * @param  int    $max Max locations to return.
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_formatted_location($max = 10, $context = 'view')
{
}
    /**
     * Get shipping methods linked to this zone.
     *
     * @param bool   $enabled_only Only return enabled methods.
     * @param string $context Getting shipping methods for what context. Valid values, admin, json.
     * @return array of objects
     */
    public function get_shipping_methods($enabled_only = false, $context = 'admin')
{
}
    /**
     * Set zone name.
     *
     * @param string $set Value to set.
     */
    public function set_zone_name($set)
{
}
    /**
     * Set zone order. Value to set.
     *
     * @param int $set Value to set.
     */
    public function set_zone_order($set)
{
}
    /**
     * Set zone locations.
     *
     * @since 3.0.0
     * @param array $locations Value to set.
     */
    public function set_zone_locations($locations)
{
}
    /**
     * Save zone data to the database.
     *
     * @return int
     */
    public function save()
{
}
    /**
     * Generate a zone name based on location.
     *
     * @return string
     */
    protected function generate_zone_name()
{
}
    /**
     * Is passed location type valid?
     *
     * @param  string $type Type to check.
     * @return boolean
     */
    public function is_valid_location_type($type)
{
}
    /**
     * Add location (state or postcode) to a zone.
     *
     * @param string $code Location code.
     * @param string $type state or postcode.
     */
    public function add_location($code, $type)
{
}
    /**
     * Clear all locations for this zone.
     *
     * @param array|string $types of location to clear.
     */
    public function clear_locations($types = array (
  0 => 'postcode',
  1 => 'state',
  2 => 'country',
  3 => 'continent',
))
{
}
    /**
     * Set locations.
     *
     * @param array $locations Array of locations.
     */
    public function set_locations($locations = array())
{
}
    /**
     * Add a shipping method to this zone.
     *
     * @param string $type shipping method type.
     * @return int new instance_id, 0 on failure
     */
    public function add_shipping_method($type)
{
}
    /**
     * Delete a shipping method from a zone.
     *
     * @param int $instance_id Shipping method instance ID.
     * @return True on success, false on failure
     */
    public function delete_shipping_method($instance_id)
{
}
}
