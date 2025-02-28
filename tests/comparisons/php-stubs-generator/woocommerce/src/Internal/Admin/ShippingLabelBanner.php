<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Shows print shipping label banner on edit order page.
 */
class ShippingLabelBanner
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Add metabox to order page.
     */
    public function add_meta_boxes()
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