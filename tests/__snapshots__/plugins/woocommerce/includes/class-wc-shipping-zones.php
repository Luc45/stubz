<?php

namespace ;

/**
 * Shipping zones class.
 */
class WC_Shipping_Zones
{
    /**
     * Get shipping zones from the database.
     *
     * @since 2.6.0
     * @param string $context Getting shipping methods for what context. Valid values, admin, json.
     * @return array Array of arrays.
     */
    public static function get_zones($context = 'admin')
    {
        // stub
    }

    /**
     * Get shipping zone using it's ID
     *
     * @since 2.6.0
     * @param int $zone_id Zone ID.
     * @return WC_Shipping_Zone|bool
     */
    public static function get_zone($zone_id)
    {
        // stub
    }

    /**
     * Get shipping zone by an ID.
     *
     * @since 2.6.0
     * @param string $by Get by 'zone_id' or 'instance_id'.
     * @param int    $id ID.
     * @return WC_Shipping_Zone|bool
     */
    public static function get_zone_by($by = 'zone_id', $id = 0)
    {
        // stub
    }

    /**
     * Get shipping zone using it's ID.
     *
     * @since 2.6.0
     * @param int $instance_id Instance ID.
     * @return bool|WC_Shipping_Method
     */
    public static function get_shipping_method($instance_id)
    {
        // stub
    }

    /**
     * Delete a zone using it's ID
     *
     * @param int $zone_id Zone ID.
     * @since 2.6.0
     */
    public static function delete_zone($zone_id)
    {
        // stub
    }

    /**
     * Find a matching zone for a given package.
     *
     * @since  2.6.0
     * @uses   wc_make_numeric_postcode()
     * @param  array $package Shipping package.
     * @return WC_Shipping_Zone
     */
    public static function get_zone_matching_package($package)
    {
        // stub
    }

}

