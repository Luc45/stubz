<?php

/**
 * This class adds actions to track usage of the WooCommerce Extensions page.
 */
class WC_Extensions_Tracking
{
    /**
     * Init tracking.
     */
    public function init()
    {
        // stub
    }

    /**
     * Send a Tracks event when an Extensions page is viewed.
     */
    public function track_extensions_page()
    {
        // stub
    }

    /**
     * Send a Tracks event when the Extensions page gets a bad response or no response
     * from the WCCOM extensions API.
     *
     * @param string $error Error message.
     */
    public function track_extensions_page_connection_error(string $error = '')
    {
        // stub
    }

    /**
     * Send a Tracks even when a Helper connection process is initiated.
     */
    public function track_helper_connection_start()
    {
        // stub
    }

    /**
     * Send a Tracks even when a Helper connection process is cancelled.
     */
    public function track_helper_connection_cancelled()
    {
        // stub
    }

    /**
     * Send a Tracks even when a Helper connection process completed successfully.
     */
    public function track_helper_connection_complete()
    {
        // stub
    }

    /**
     * Send a Tracks even when a Helper has been disconnected.
     */
    public function track_helper_disconnected()
    {
        // stub
    }

    /**
     * Send a Tracks even when Helper subscriptions are refreshed.
     */
    public function track_helper_subscriptions_refresh()
    {
        // stub
    }

    /**
     * Send a Tracks event when addon is installed via the Extensions page.
     *
     * @param string $addon_id Addon slug.
     * @param string $section  Extensions tab.
     */
    public function track_addon_install($addon_id, $section)
    {
        // stub
    }

}
