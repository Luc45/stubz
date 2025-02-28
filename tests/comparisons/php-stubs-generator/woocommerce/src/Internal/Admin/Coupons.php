<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Contains backend logic for the Coupons feature.
 */
class Coupons
{
    use \Automattic\WooCommerce\Internal\Admin\CouponsMovedTrait;
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
    }
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Maybe add menu item back in original spot to help people transition
     */
    public function maybe_add_coupon_menu_redirect()
    {
    }
    /**
     * Call back for transition menu item
     */
    public function coupon_menu_moved()
    {
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
    }
    /**
     * Undo WC modifications to $parent_file for 'shop_coupon'
     */
    public function fix_coupon_menu_highlight()
    {
    }
    /**
     * Maybe add our wc-admin coupon scripts if viewing coupon pages
     */
    public function maybe_add_marketing_coupon_script()
    {
    }
}