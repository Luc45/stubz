<?php

/**
 * Class WC_Plugins_Screen_Updates
 */
class WC_Plugins_Screen_Updates extends \WC_Plugin_Updates
{
    /**
     * The upgrade notice shown inline.
     *
     * @var string
     */
    protected $upgrade_notice = '';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Show plugin changes on the plugins screen. Code adapted from W3 Total Cache.
     *
     * @param array    $args Unused parameter.
     * @param stdClass $response Plugin update response.
     */
    public function in_plugin_update_message($args, $response)
    {
    }
    /**
     * Get the upgrade notice from WordPress.org.
     *
     * @param  string $version WooCommerce new version.
     * @return string
     */
    protected function get_upgrade_notice($version)
    {
    }
    /**
     * JS for the modal window on the plugins screen.
     */
    public function plugin_screen_modal_js()
    {
    }
}