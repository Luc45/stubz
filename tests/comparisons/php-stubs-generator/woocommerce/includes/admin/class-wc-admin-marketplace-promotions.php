<?php

/**
 * WC_Admin_Marketplace_Promotions class.
 */
class WC_Admin_Marketplace_Promotions
{
    public const CRON_NAME = 'woocommerce_marketplace_cron_fetch_promotions';
    public const TRANSIENT_NAME = 'woocommerce_marketplace_promotions_v2';
    public const TRANSIENT_LIFE_SPAN = \DAY_IN_SECONDS;
    public const PROMOTIONS_API_URL = 'https://woocommerce.com/wp-json/wccom-extensions/3.0/promotions';
    /**
     * The user's locale, for example en_US.
     *
     * @var string
     */
    public static string $locale;
    /**
     * On all admin pages, try go get Marketplace promotions every day.
     * Shows notice and adds menu badge to WooCommerce Extensions item
     * if the promotions API requests them.
     *
     * WC_Admin calls this method when it is instantiated during
     * is_admin requests.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Fetch promotions from the API and store them in a transient.
     *
     * @return void
     */
    public static function update_promotions()
    {
    }
    /**
     * Get active Marketplace promotions from the transient.
     * Use `woocommerce_marketplace_suppress_promotions` filter to suppress promotions.
     *
     * @since 9.0
     */
    public static function get_active_promotions()
    {
    }
    /**
     * Callback for the `woocommerce_marketplace_menu_items` filter
     * in `Automattic\WooCommerce\Internal\Admin\Marketplace::get_marketplace_pages`.
     * At the moment, the Extensions page is the only page in `$menu_items`.
     * Adds a bubble to the menu item.
     *
     * @param array  $menu_items  Arrays representing items in nav menu.
     * @param ?array $promotion   Data about a promotion from the WooCommerce.com API.
     *
     * @return array
     */
    public static function filter_marketplace_menu_items($menu_items, $promotion = array()): array
    {
    }
    /**
     * When WooCommerce is disabled, clear the WP Cron event we use to fetch promotions.
     *
     * @version 9.5.0
     *
     * @return void
     */
    public static function clear_cron_event()
    {
    }
    /**
     * Clear deprecated scheduled action that was used to fetch promotions in WooCommerce 8.8.
     * Replaced with a transient in WooCommerce 9.0.
     *
     * @return void
     */
    public static function clear_deprecated_scheduled_event()
    {
    }
    /**
     * We can't clear deprecated action from AS when it's running,
     * so we schedule a new single action to clear the deprecated
     * `woocommerce_marketplace_fetch_promotions` action.
     */
    public static function clear_deprecated_action()
    {
    }
}
