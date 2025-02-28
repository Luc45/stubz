<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Woo_Subscriptions_Notes
 */
class WooSubscriptionsNotes
{
    const LAST_REFRESH_OPTION_KEY = 'woocommerce_admin-wc-helper-last-refresh';
    const NOTE_NAME = 'wc-admin-wc-helper-connection';
    const CONNECTION_NOTE_NAME = 'wc-admin-wc-helper-connection';
    const SUBSCRIPTION_NOTE_NAME = 'wc-admin-wc-helper-subscription';
    const NOTIFY_WHEN_DAYS_LEFT = 60;
    const BUMP_THRESHOLDS = array (
  0 => 60,
  1 => 45,
  2 => 20,
  3 => 7,
  4 => 1,
);
    /**
     * Hook all the things.
     */
    public function __construct()
{
}
    /**
     * Reacts to changes in the helper option.
     *
     * @param array $old_value The previous value of the option.
     * @param array $value The new value of the option.
     */
    public function update_option_woocommerce_helper_data($old_value, $value)
{
}
    /**
     * Runs on `admin_head` hook. Checks the connection and refreshes subscription notes on relevant pages.
     */
    public function admin_head()
{
}
    /**
     * Checks the connection. Adds a note (as necessary) if there is no connection.
     */
    public function check_connection()
{
}
    /**
     * Whether or not we think the site is currently connected to WooCommerce.com.
     *
     * @return bool
     */
    public function is_connected()
{
}
    /**
     * Returns the WooCommerce.com provided site ID for this site.
     *
     * @return int|false
     */
    public function get_connected_site_id()
{
}
    /**
     * Returns an array of product_ids whose subscriptions are active on this site.
     *
     * @return array
     */
    public function get_subscription_active_product_ids()
{
}
    /**
     * Clears all connection or subscription notes.
     */
    public function remove_notes()
{
}
    /**
     * Gets the product_id (if any) associated with a note.
     *
     * @param Note $note The note object to interrogate.
     * @return int|false
     */
    public function get_product_id_from_subscription_note(&$note)
{
}
    /**
     * Removes notes for product_ids no longer active on this site.
     */
    public function prune_inactive_subscription_notes()
{
}
    /**
     * Finds a note for a given product ID, if the note exists at all.
     *
     * @param int $product_id The product ID to search for.
     * @return Note|false
     */
    public function find_note_for_product_id($product_id)
{
}
    /**
     * Deletes a note for a given product ID, if the note exists at all.
     *
     * @param int $product_id The product ID to search for.
     */
    public function delete_any_note_for_product_id($product_id)
{
}
    /**
     * Adds or updates a note for an expiring subscription.
     *
     * @param array $subscription The subscription to work with.
     */
    public function add_or_update_subscription_expiring($subscription)
{
}
    /**
     * Adds a note for an expired subscription, or updates an expiring note to expired.
     *
     * @param array $subscription The subscription to work with.
     */
    public function add_or_update_subscription_expired($subscription)
{
}
    /**
     * For each active subscription on this site, checks the expiration date and creates/updates/deletes notes.
     */
    public function refresh_subscription_notes()
{
}
}