<?php

/**
 * Brand settings manager.
 *
 * This class is responsible for setting and getting brand settings for a coupon.
 *
 * Important: For internal use only by the Automattic\WooCommerce\Internal\Brands package.
 *
 * @version 9.4.0
 */
class WC_Brands_Brand_Settings_Manager
{
    /**
     * Brand settings for a coupon.
     *
     * @var array
     */
    private static $brand_settings = array (
);

    /**
     * Set brand settings for a coupon.
     *
     * @param WC_Coupon $coupon Coupon object.
     */
    public static function set_brand_settings_on_coupon($coupon)
    {
        // stub
    }

    /**
     * Get brand settings for a coupon.
     *
     * @param WC_Coupon $coupon Coupon object.
     * @return array Brand settings (included and excluded brands).
     */
    public static function get_brand_settings_on_coupon($coupon)
    {
        // stub
    }

}
