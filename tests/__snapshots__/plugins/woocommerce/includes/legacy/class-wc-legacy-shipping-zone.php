<?php
/**
 * Legacy Shipping Zone.
 *
 * @version  3.0.0
 * @package  WooCommerce\Classes
 * @category Class
 * @author   WooThemes
 */
abstract class WC_Legacy_Shipping_Zone extends \WC_Data
{
    /**
     * Get zone ID
     * @return int|null Null if the zone does not exist. 0 is the default zone.
     * @deprecated 3.0
     */
    public function get_zone_id()
{
}
    /**
     * Read a shipping zone by ID.
     * @deprecated 3.0.0 - Init a shipping zone with an ID.
     *
     * @param int $zone_id
     */
    public function read($zone_id)
{
}
    /**
     * Update a zone.
     * @deprecated 3.0.0 - Use ::save instead.
     */
    public function update()
{
}
    /**
     * Create a zone.
     * @deprecated 3.0.0 - Use ::save instead.
     */
    public function create()
{
}
}
