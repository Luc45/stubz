<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Takes care of Launch Your Store related actions.
 */
class LaunchYourStore
{
    const BANNER_DISMISS_USER_META_KEY = 'coming_soon_banner_dismissed';

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Save values submitted from WooCommerce -> Settings -> General.
     *
     * @return void
     */
    public function save_site_visibility_options()
    {
        // stub
    }

    /**
     * Append coming soon prop tracks globally.
     *
     * @param array $event_properties Event properties array.
     *
     * @return array
     */
    public function append_coming_soon_global_tracks($event_properties)
    {
        // stub
    }

    /**
     * Preload settings for Site Visibility.
     *
     * @param array $settings settings array.
     *
     * @return mixed
     */
    public function preload_settings($settings)
    {
        // stub
    }

    /**
     * User must be an admin or editor.
     *
     * @return bool
     */
    private function is_manager_or_admin()
    {
        // stub
    }

    /**
     * Add 'coming soon' banner on the frontend when the following conditions met.
     *
     * - User must be either an admin or store editor (must be logged in).
     * - 'woocommerce_coming_soon' option value must be 'yes'
     * - The page must not be the Coming soon page itself.
     */
    public function maybe_add_coming_soon_banner_on_frontend()
    {
        // stub
    }

    /**
     * Register user meta fields for Launch Your Store.
     *
     * This should be removed in WC 9.4.
     */
    public function register_launch_your_store_user_meta_fields()
    {
        // stub
    }

    /**
     * Register user meta fields for Launch Your Store.
     *
     * @param array $user_data_fields user data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
    {
        // stub
    }

    /**
     * Reset 'woocommerce_coming_soon_banner_dismissed' user meta to 'no'.
     *
     * Runs when a user logs-in successfully.
     *
     * @param string $user_login user login.
     * @param object $user user object.
     */
    public function reset_woocommerce_coming_soon_banner_dismissed($user_login, $user)
    {
        // stub
    }

    /**
     * Check if the Mailpoet is connected.
     *
     * @return bool true if Mailpoet is fully connected, meaning the API key is valid and approved.
     */
    private function is_mailpoet_connected()
    {
        // stub
    }

    /**
     * Track when coming soon template is changed.
     *
     * @param int     $post_id The post ID.
     * @param WP_Post $post The post object.
     * @param bool    $update Whether the post is being updated.
     */
    public function maybe_track_template_change($post_id, $post, $update)
    {
        // stub
    }

    /**
     * Load slotfill script and JS variables for the newsletter.
     * The comingSoonNewsletter is used in client/wp-admin-scripts/coming-soon-newsletter-panel
     *
     * @return void
     */
    public function load_newsletter_scripts()
    {
        // stub
    }

}

