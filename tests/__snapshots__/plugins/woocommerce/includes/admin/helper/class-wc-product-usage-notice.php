<?php
/**
 * Product usage notice class.
 */
class WC_Product_Usage_Notice
{
    public const DISMISSED_COUNT_META_PREFIX = '_woocommerce_product_usage_notice_dismissed_count_';
    public const DISMISSED_TIMESTAMP_META_PREFIX = '_woocommerce_product_usage_notice_dismissed_timestamp_';
    public const REMIND_LATER_TIMESTAMP_META_PREFIX = '_woocommerce_product_usage_notice_remind_later_timestamp_';
    public const LAST_DISMISSED_TIMESTAMP_META = '_woocommerce_product_usage_notice_last_dismissed_timestamp';
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
     * Enqueue scripts needed to display product usage notice (or modal).
     */
    public static function enqueue_product_usage_notice_scripts()
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
