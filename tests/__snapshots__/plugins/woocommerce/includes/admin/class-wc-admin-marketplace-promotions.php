<?php

/**
 * WC_Admin_Marketplace_Promotions class.
 */
class WC_Admin_Marketplace_Promotions
{
    const CRON_NAME = 'woocommerce_marketplace_cron_fetch_promotions';

    const TRANSIENT_NAME = 'woocommerce_marketplace_promotions_v2';

    const PROMOTIONS_API_URL = 'https://woocommerce.com/wp-json/wccom-extensions/3.0/promotions';

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
     * Schedule a daily cron event to fetch promotions.
     *
     * @version 9.5.0
     *
     * @return void
     */
    private static function schedule_cron_event()
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
     * Get promotions to show in the Woo in-app marketplace and load them into a transient
     * with a 12-hour life. Run as a recurring scheduled action.
     *
     * @return array
     */
    private static function fetch_marketplace_promotions()
{
}
    /**
     * If there's an active promotion of the format `menu_bubble`,
     * add a filter to show a bubble on the Extensions item in the
     * WooCommerce menu.
     *
     * Use `woocommerce_marketplace_suppress_promotions` filter to suppress the bubble.
     *
     * @return void
     * @throws Exception  If we are unable to create a DateTime from the date_to_gmt.
     */
    private static function maybe_show_bubble_promotions()
{
}
    /**
     * From the array of promotions, select those of a given format.
     *
     * @param ?array  $promotions  Array of data about promotions of all formats.
     * @param ?string $format      Format we want to filter for.
     *
     * @return array
     */
    private static function get_promotions_of_format($promotions = array(), $format = ''): array
{
}
    /**
     * Find promotions that are still active – they have a date range that
     * includes the current date.
     *
     * @param ?array $promotions  Data about current promotions.
     *
     * @return array
     */
    private static function filter_out_inactive_promotions($promotions = array())
{
}
    /**
     * Promos arrive in the array of promotions as an array of arrays with the key 'promos'.
     * We merge them into the main array.
     *
     * @param ?array $promotions  Promotions data received from WCCOM.
     *                            May have an element with the key 'promos', which contains an array.
     *
     * @return array
     * */
    private static function merge_promos(array|null $promotions = array()): array
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
     * Return the markup for a menu item bubble with a given text.
     *
     * @param string $menu_item_text Text of menu item we want to change.
     * @param string $bubble_text    Text of bubble.
     *
     * @return string
     */
    private static function append_bubble(string $menu_item_text, string $bubble_text): string
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
