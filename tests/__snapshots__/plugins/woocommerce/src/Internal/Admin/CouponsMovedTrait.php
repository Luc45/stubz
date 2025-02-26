<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * CouponsMovedTrait trait.
 */
trait CouponsMovedTrait
{
    /**
     * The GET query key for the legacy menu.
     *
     * @var string
     */
    protected static $query_key = 'legacy_coupon_menu';

    /**
     * The key for storing an option in the DB.
     *
     * @var string
     */
    protected static $option_key = 'wc_admin_show_legacy_coupon_menu';

    /**
     * Get the URL for the legacy coupon management.
     *
     * @return string The unescaped URL for the legacy coupon management page.
     */
    protected static function get_legacy_coupon_url()
    {
        // stub
    }

    /**
     * Get the URL for the coupon management page.
     *
     * @param array $args Additional URL query arguments.
     *
     * @return string
     */
    protected static function get_coupon_url($args = array(
))
    {
        // stub
    }

    /**
     * Get the new URL for managing coupons.
     *
     * @param string $page The management page.
     *
     * @return string
     */
    protected static function get_management_url($page)
    {
        // stub
    }

    /**
     * Get the WC Admin path for the marking page.
     *
     * @return string
     */
    protected static function get_marketing_path()
    {
        // stub
    }

    /**
     * Whether we should display the legacy coupon menu item.
     *
     * @return bool
     */
    protected static function should_display_legacy_menu()
    {
        // stub
    }

    /**
     * Set whether we should display the legacy coupon menu item.
     *
     * @param bool $display Whether the menu should be displayed or not.
     */
    protected static function display_legacy_menu($display = false)
    {
        // stub
    }

}

