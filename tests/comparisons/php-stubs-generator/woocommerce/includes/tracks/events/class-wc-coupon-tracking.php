<?php

/**
 * WooCommerce Coupon Tracking
 *
 * @package WooCommerce\Tracks
 */
/**
 * This class adds actions to track usage of a WooCommerce Coupon.
 */
class WC_Coupon_Tracking
{
    /**
     * Init tracking.
     */
    public function init()
    {
    }
    /**
     * Send a Tracks event when a coupon is updated.
     *
     * @param WC_Coupon $coupon        The coupon that has been updated.
     * @param Array     $updated_props The props of the coupon that have been updated.
     */
    public function track_coupon_updated($coupon, $updated_props)
    {
    }
}
