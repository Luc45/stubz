<?php

/**
 * This class adds actions to track usage of WooCommerce Settings.
 */
class WC_Settings_Tracking
{
    /**
     * List of allowed WooCommerce settings to potentially track updates for.
     *
     * @var array
     */
    protected $allowed_options = array();
    /**
     * WooCommerce settings that have been updated (and will be tracked).
     *
     * @var array
     */
    protected $updated_options = array();
    /**
     * List of option names that are dropdown menus.
     *
     * @var array
     */
    protected $dropdown_menu_options = array();
    /**
     * List of options that have been modified.
     *
     * @var array
     */
    protected $modified_options = array();
    /**
     * List of options that have been deleted.
     *
     * @var array
     */
    protected $deleted_options = array();
    /**
     * List of options that have been added.
     *
     * @var array
     */
    protected $added_options = array();
    /**
     * Toggled options.
     *
     * @var array
     */
    protected $toggled_options = array('enabled' => array(), 'disabled' => array());
    /**
     * Init tracking.
     */
    public function init()
    {
    }
    /**
     * Adds the option to the allowed and updated options directly.
     * Currently used for settings that don't use update_option.
     *
     * @param array $option WooCommerce option that should be updated.
     */
    public function add_option_to_list_and_track_setting_change($option)
    {
    }
    /**
     * Add a WooCommerce option name to our allowed options list and attach
     * the `update_option` hook. Rather than inspecting every updated
     * option and pattern matching for "woocommerce", just build a dynamic
     * list for WooCommerce options that might get updated.
     *
     * See `woocommerce_update_option` hook.
     *
     * @param array $option WooCommerce option (config) that might get updated.
     */
    public function add_option_to_list($option)
    {
    }
    /**
     * Add WooCommerce option to a list of updated options.
     *
     * @param string $option_name Option being updated.
     * @param mixed  $old_value Old value of option.
     * @param mixed  $new_value New value of option.
     */
    public function track_setting_change($option_name, $old_value, $new_value)
    {
    }
    /**
     * Send a Tracks event for WooCommerce options that changed values.
     */
    public function send_settings_change_event()
    {
    }
    /**
     * Send a Tracks event for WooCommerce settings page views.
     */
    public function track_settings_page_view()
    {
    }
    /**
     * Adds the tracking scripts for product setting pages.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_settings_tracking_scripts($hook)
    {
    }
}