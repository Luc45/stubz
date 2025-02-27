<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Contains backend logic for the Coupons feature.
 */
class Coupons
{
    /**
     * Class instance.
     *
     * @var Coupons instance
     */
    protected static $instance = null;

    /**
     * Get class instance.
     */
    public static function get_instance()
    {
        // stub
    }

    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Maybe add menu item back in original spot to help people transition
     */
    public function maybe_add_coupon_menu_redirect()
    {
        // stub
    }

    /**
     * Call back for transition menu item
     */
    public function coupon_menu_moved()
    {
        // stub
    }

    /**
     * Modify registered post type shop_coupon
     *
     * @param array $args Array of post type parameters.
     *
     * @return array the filtered parameters.
     */
    public function move_coupons($args)
    {
        // stub
    }

    /**
     * Undo WC modifications to $parent_file for 'shop_coupon'
     */
    public function fix_coupon_menu_highlight()
    {
        // stub
    }

    /**
     * Maybe add our wc-admin coupon scripts if viewing coupon pages
     */
    public function maybe_add_marketing_coupon_script()
    {
        // stub
    }

}