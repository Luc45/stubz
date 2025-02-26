<?php

namespace ;

/**
 * WC Shipping Zone Data Store.
 *
 * @version  3.0.0
 */
class WC_Shipping_Zone_Data_Store extends \WC_Data_Store_WP
{
    /**
     * Method to create a new shipping zone.
     *
     * @since 3.0.0
     * @param WC_Shipping_Zone $zone Shipping zone object.
     */
    public function create(&$zone)
    {
        // stub
    }

    /**
     * Update zone in the database.
     *
     * @since 3.0.0
     * @param WC_Shipping_Zone $zone Shipping zone object.
     */
    public function update(&$zone)
    {
        // stub
    }

    /**
     * Method to read a shipping zone from the database.
     *
     * @since 3.0.0
     * @param WC_Shipping_Zone $zone Shipping zone object.
     * @throws Exception If invalid data store.
     */
    public function read(&$zone)
    {
        // stub
    }

    /**
     * Deletes a shipping zone from the database.
     *
     * @since  3.0.0
     * @param  WC_Shipping_Zone $zone Shipping zone object.
     * @param  array            $args Array of args to pass to the delete method.
     * @return void
     */
    public function delete(&$zone, $args = array(
))
    {
        // stub
    }

    /**
     * Get a list of shipping methods for a specific zone.
     *
     * @since  3.0.0
     * @param  int  $zone_id      Zone ID.
     * @param  bool $enabled_only True to request enabled methods only.
     * @return array               Array of objects containing method_id, method_order, instance_id, is_enabled
     */
    public function get_methods($zone_id, $enabled_only)
    {
        // stub
    }

    /**
     * Get count of methods for a zone.
     *
     * @since  3.0.0
     * @param  int $zone_id Zone ID.
     * @return int Method Count
     */
    public function get_method_count($zone_id)
    {
        // stub
    }

    /**
     * Add a shipping method to a zone.
     *
     * @since  3.0.0
     * @param  int    $zone_id Zone ID.
     * @param  string $type    Method Type/ID.
     * @param  int    $order   Method Order.
     * @return int             Instance ID
     */
    public function add_method($zone_id, $type, $order)
    {
        // stub
    }

    /**
     * Delete a method instance.
     *
     * @since 3.0.0
     * @param int $instance_id Instance ID.
     */
    public function delete_method($instance_id)
    {
        // stub
    }

    /**
     * Get a shipping zone method instance.
     *
     * @since  3.0.0
     * @param  int $instance_id Instance ID.
     * @return object
     */
    public function get_method($instance_id)
    {
        // stub
    }

    /**
     * Find a matching zone ID for a given package.
     *
     * @since  3.0.0
     * @param  object $package Package information.
     * @return int
     */
    public function get_zone_id_from_package($package)
    {
        // stub
    }

    /**
     * Return an ordered list of zones.
     *
     * @since 3.0.0
     * @return array An array of objects containing a zone_id, zone_name, and zone_order.
     */
    public function get_zones()
    {
        // stub
    }

    /**
     * Return a zone ID from an instance ID.
     *
     * @since  3.0.0
     * @param  int $id Instance ID.
     * @return int
     */
    public function get_zone_id_by_instance_id($id)
    {
        // stub
    }

    /**
     * Read location data from the database.
     *
     * @param WC_Shipping_Zone $zone Shipping zone object.
     */
    private function read_zone_locations(&$zone)
    {
        // stub
    }

    /**
     * Save locations to the DB.
     * This function clears old locations, then re-inserts new if any changes are found.
     *
     * @since 3.0.0
     *
     * @param WC_Shipping_Zone $zone Shipping zone object.
     *
     * @return bool|void
     */
    private function save_locations(&$zone)
    {
        // stub
    }

}

