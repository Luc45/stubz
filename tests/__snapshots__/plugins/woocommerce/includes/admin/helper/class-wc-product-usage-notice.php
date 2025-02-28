<?php
/**
 * Product usage notice class.
 */
class WC_Product_Usage_Notice
{
    const DISMISSED_COUNT_META_PREFIX = '_woocommerce_product_usage_notice_dismissed_count_';
    const DISMISSED_TIMESTAMP_META_PREFIX = '_woocommerce_product_usage_notice_dismissed_timestamp_';
    const REMIND_LATER_TIMESTAMP_META_PREFIX = '_woocommerce_product_usage_notice_remind_later_timestamp_';
    const LAST_DISMISSED_TIMESTAMP_META = '_woocommerce_product_usage_notice_last_dismissed_timestamp';
    /**
     * Array of product usage notice rules from helper API.
     *
     * @var array
     */
    private static $product_usage_notice_rules = array();
    /**
     * Current product usage notice rule applied to the current admin screen.
     *
     * @var array
     */
    private static $current_notice_rule = array();
    /**
     * Loads the class, runs on init.
     *
     * @return void
     */
    public static function load()
{
}
    /**
     * Maybe show product usage notice in a given screen object.
     *
     * @param \WP_Screen $screen Current \WP_Screen object.
     */
    public static function maybe_show_product_usage_notice($screen)
{
}
    /**
     * Check whether the user clicked "remind later" recently.
     *
     * @param int $user_id    User ID.
     * @param int $product_id Product ID.
     *
     * @return bool
     */
    private static function is_remind_later_clicked_recently(int $user_id, int $product_id): bool
{
}
    /**
     * Check whether the user has reached max dismissals of product usage notice.
     *
     * @param int $user_id    User ID.
     * @param int $product_id Product ID.
     *
     * @return bool
     */
    private static function has_reached_max_dismissals(int $user_id, int $product_id): bool
{
}
    /**
     * Check whether the user dismissed any product usage notices recently.
     *
     * @param int $user_id User ID.
     *
     * @return bool
     */
    private static function is_any_notices_dismissed_recently(int $user_id): bool
{
}
    /**
     * Check whether the user dismissed given product usage notice recently.
     *
     * @param int $user_id    User ID.
     * @param int $product_id Product ID.
     *
     * @return bool
     */
    private static function is_product_notice_dismissed_recently(int $user_id, int $product_id): bool
{
}
    /**
     * Check whether current notice is throttled for the user and product.
     *
     * @param int $user_id    User ID.
     * @param int $product_id Product ID.
     *
     * @return bool
     */
    private static function is_notice_throttled(int $user_id, int $product_id): bool
{
}
    /**
     * Enqueue scripts needed to display product usage notice (or modal).
     */
    public static function enqueue_product_usage_notice_scripts()
{
}
    /**
     * Get product usage notice rule from a given WP_Screen object.
     *
     * @param \WP_Screen $screen Current \WP_Screen object.
     *
     * @return array
     */
    private static function get_current_notice_rule($screen)
{
}
    /**
     * Check whether the screen and GET parameter matches a given rule.
     *
     * @param \WP_Screen $screen Current \WP_Screen object.
     * @param array      $rule   Product usage notice rule.
     *
     * @return bool
     */
    private static function query_string_matches($screen, $rule)
{
}
    /**
     * AJAX handler for dismiss action of product usage notice.
     */
    public static function ajax_dismiss()
{
}
    /**
     * AJAX handler for "remind later" action of product usage notice.
     */
    public static function ajax_remind_later()
{
}
}
