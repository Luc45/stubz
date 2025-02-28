<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Handles stored state setup for products.
 */
class StoredStateSetupForProducts
{
    const ASYNC_RUN_REMOTE_NOTIFICATIONS_ACTION_NAME = 'woocommerce_admin/stored_state_setup_for_products/async/run_remote_notifications';
    /**
     * Initialize the class via the admin_init hook.
     */
    public static function admin_init()
    {
    }
    /**
     * Initialize the class via the init hook.
     *
     * @internal
     */
    public static final function init()
    {
    }
    /**
     * Run the remote notifications engine. This is triggered by
     * action-scheduler after a product is added. It also cleans up from
     * setting the product count increment.
     */
    public static function run_remote_notifications()
    {
    }
    /**
     * Set initial stored state values.
     *
     * @param object $stored_state The stored state.
     *
     * @return object The stored state.
     */
    public static function init_stored_state($stored_state)
    {
    }
    /**
     * Runs on product importer steps.
     */
    public static function run_on_product_importer()
    {
    }
    /**
     * Runs when a post status transitions, but we're only interested if it is
     * a product being published.
     *
     * @param string $new_status The new status.
     * @param string $old_status The old status.
     * @param Post   $post       The post.
     */
    public static function run_on_transition_post_status($new_status, $old_status, $post)
    {
    }
}