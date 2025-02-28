<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Triggers customer effort score on several different actions.
 */
class CustomerEffortScoreTracks
{
    public const CES_TRACKS_QUEUE_OPTION_NAME = 'woocommerce_ces_tracks_queue';
    public const CLEAR_CES_TRACKS_QUEUE_FOR_PAGE_OPTION_NAME = 'woocommerce_clear_ces_tracks_queue_for_page';
    public const SHOWN_FOR_ACTIONS_OPTION_NAME = 'woocommerce_ces_shown_for_actions';
    public const PRODUCT_ADD_PUBLISH_ACTION_NAME = 'product_add_publish';
    public const PRODUCT_UPDATE_ACTION_NAME = 'product_update';
    public const SHOP_ORDER_UPDATE_ACTION_NAME = 'shop_order_update';
    public const SETTINGS_CHANGE_ACTION_NAME = 'settings_change';
    public const ADD_PRODUCT_CATEGORIES_ACTION_NAME = 'add_product_categories';
    public const ADD_PRODUCT_TAGS_ACTION_NAME = 'add_product_tags';
    public const ADD_PRODUCT_ATTRIBUTES_ACTION_NAME = 'add_product_attributes';
    public const IMPORT_PRODUCTS_ACTION_NAME = 'import_products';
    public const SEARCH_ACTION_NAME = 'ces_search';
    /**
     * Constructor. Sets up filters to hook into WooCommerce.
     */
    public function __construct()
{
}
    /**
     * Enqueue the CES survey on using search dynamically.
     *
     * @param string $search_area Search area such as "product" or "shop_order".
     * @param string $page_now Value of window.pagenow.
     * @param string $admin_page Value of window.adminpage.
     */
    public function enqueue_ces_survey_for_search($search_area, $page_now, $admin_page)
{
}
    /**
     * Hook into the post status lifecycle, to detect relevant user actions
     * that we want to survey about.
     *
     * @param string $new_status The new status.
     * @param string $old_status The old status.
     * @param Post   $post The post.
     */
    public function run_on_transition_post_status($new_status, $old_status, $post)
{
}
    /**
     * Maybe clear the CES tracks queue, executed on every page load. If the
     * clear option is set it clears the queue. In practice, this executes a
     * page load after the queued CES tracks are displayed on the client, which
     * sets the clear option.
     */
    public function maybe_clear_ces_tracks_queue()
{
}
    /**
     * Appends a script to footer to trigger CES on adding product categories.
     */
    public function add_script_track_product_categories()
{
}
    /**
     * Appends a script to footer to trigger CES on adding product tags.
     */
    public function add_script_track_product_tags()
{
}
    /**
     * Maybe enqueue the CES survey on product import, if step is done.
     */
    public function run_on_product_import()
{
}
    /**
     * Enqueue the CES survey trigger for setting changes.
     */
    public function run_on_update_options()
{
}
    /**
     * Enqueue the CES survey on adding new product attributes.
     */
    public function run_on_add_product_attributes()
{
}
    /**
     * Determine on initiating CES survey on searching for product or orders.
     */
    public function run_on_load_edit_php()
{
}
}