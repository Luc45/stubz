<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Remote Inbox Notifications engine.
 * This goes through the specs and runs (creates admin notes) for those
 * specs that are able to be triggered.
 */
class RemoteInboxNotificationsEngine extends \Automattic\WooCommerce\Admin\RemoteSpecs\RemoteSpecsEngine
{
    const STORED_STATE_OPTION_NAME = 'wc_remote_inbox_notifications_stored_state';
    const WCA_UPDATED_OPTION_NAME = 'wc_remote_inbox_notifications_wca_updated';
    /**
     * Initialize the engine.
     * phpcs:disable WooCommerce.Functions.InternalInjectionMethod.MissingFinal
     * phpcs:disable WooCommerce.Functions.InternalInjectionMethod.MissingInternalTag
     */
    public static function init()
    {
    }
    /**
     * This is triggered when the profile option is updated and if the
     * profiler is being completed, triggers a run of the engine.
     *
     * @param mixed $old_value Old value.
     * @param mixed $new_value New value.
     */
    public static function update_profile_option($old_value, $new_value)
    {
    }
    /**
     * Init is continued via admin_init so that WC is loaded when the product
     * query is used, otherwise the query generates a "0 = 1" in the WHERE
     * condition and thus doesn't return any results.
     */
    public static function on_admin_init()
    {
    }
    /**
     * An init hook is used here so that StoredStateSetupForProducts can set
     * up a hook that gets triggered by action-scheduler - this is needed
     * because the admin_init hook doesn't get triggered by WP Cron.
     */
    public static function on_init()
    {
    }
    /**
     * Go through the specs and run them.
     */
    public static function run()
    {
    }
    /**
     * Set an option indicating that WooCommerce Admin has just been updated,
     * run the specs, then clear that option. This lets the
     * WooCommerceAdminUpdatedRuleProcessor trigger on WCA update.
     */
    public static function run_on_woocommerce_admin_updated()
    {
    }
    /**
     * Gets the stored state option, and does the initial set up if it doesn't
     * already exist.
     *
     * @return object The stored state option.
     */
    public static function get_stored_state()
    {
    }
    /**
     * The deactivated_plugin hook happens before the option is updated
     * (https://github.com/WordPress/WordPress/blob/master/wp-admin/includes/plugin.php#L826)
     * so this captures the deactivated plugin path and pushes it into the
     * PluginsProvider.
     *
     * @param string $plugin Path to the plugin file relative to the plugins directory.
     */
    public static function run_on_deactivated_plugin($plugin)
    {
    }
    /**
     * Update the stored state option.
     *
     * @param object $stored_state The stored state.
     */
    public static function update_stored_state($stored_state)
    {
    }
    /**
     * Get the note. This is used to display localized note.
     *
     * @param Note $note_from_db The note object created from db.
     *
     * @return Note The note.
     */
    public static function get_note_from_db($note_from_db)
    {
    }
    /**
     * Add the debug tools to the WooCommerce debug tools (WooCommerce > Status > Tools).
     *
     * @param array $tools a list of tools.
     *
     * @return mixed
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function add_debug_tools($tools)
    {
    }
    /**
     * Add ajax action for remote inbox notification search.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function ajax_action_inbox_notification_search()
    {
    }
}