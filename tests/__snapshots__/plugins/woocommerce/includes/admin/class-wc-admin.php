<?php

namespace ;

/**
 * WC_Admin class.
 */
class WC_Admin extends \
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Output buffering allows admin screens to make redirects later on.
     */
    public function buffer()
    {
        // stub
    }

    /**
     * Include any classes we need within admin.
     */
    public function includes()
    {
        // stub
    }

    /**
     * Include admin files conditionally.
     */
    public function conditional_includes()
    {
        // stub
    }

    /**
     * Handle redirects to setup/welcome page after install and updates.
     *
     * The user must have access rights, and we must ignore the network/bulk plugin updaters.
     */
    public function admin_redirects()
    {
        // stub
    }

    /**
     * Prevent any user who cannot 'edit_posts' (subscribers, customers etc) from accessing admin.
     */
    public function prevent_admin_access()
    {
        // stub
    }

    /**
     * Preview email template.
     */
    public function preview_emails()
    {
        // stub
    }

    /**
     * Change the admin footer text on WooCommerce admin pages.
     *
     * @since  2.3
     * @param  string $footer_text text to be rendered in the footer.
     * @return string
     */
    public function admin_footer_text($footer_text)
    {
        // stub
    }

    /**
     * Check on a Jetpack install queued by the Setup Wizard.
     *
     * See: WC_Admin_Setup_Wizard::install_jetpack()
     */
    public function setup_wizard_check_jetpack()
    {
        // stub
    }

    /**
     * Disable WXR export of scheduled action posts.
     *
     * @since 3.6.2
     *
     * @param array $args Scheduled action post type registration args.
     *
     * @return array
     */
    public function disable_webhook_post_export($args)
    {
        // stub
    }

    /**
     * Include admin classes.
     *
     * @since 4.2.0
     * @param string $classes Body classes string.
     * @return string
     */
    public function include_admin_body_class($classes)
    {
        // stub
    }

}

