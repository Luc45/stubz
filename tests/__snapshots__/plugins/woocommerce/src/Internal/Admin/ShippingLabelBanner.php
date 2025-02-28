<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Shows print shipping label banner on edit order page.
 */
class ShippingLabelBanner
{
    const MIN_COMPATIBLE_WCST_VERSION = '2.7.0';
    const MIN_COMPATIBLE_WCSHIPPING_VERSION = '1.1.0';
    /**
     * Singleton for the display rules class
     *
     * @var ShippingLabelBannerDisplayRules
     */
    private $shipping_label_banner_display_rules = null;
    /**
     * Constructor
     */
    public function __construct()
{
}
    /**
     * Check if WooCommerce Shipping makes sense for this merchant.
     *
     * @return bool
     */
    private function should_show_meta_box()
{
}
    /**
     * Add metabox to order page.
     */
    public function add_meta_boxes()
{
}
    /**
     * Count shippable items
     *
     * @param \WC_Order $order Current order.
     * @return int
     */
    private function count_shippable_items(WC_Order $order)
{
}
    /**
     * Adds JS to order page to render shipping banner.
     *
     * @param string $hook current page hook.
     */
    public function add_print_shipping_label_script($hook)
{
}
    /**
     * Render placeholder metabox.
     *
     * @param \WP_Post $post current post.
     * @param array    $args empty args.
     */
    public function meta_box($post, $args)
{
}
}