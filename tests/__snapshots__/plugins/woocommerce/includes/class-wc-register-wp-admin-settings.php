<?php

namespace ;

/**
 * Register WP admin settings class.
 */
class WC_Register_WP_Admin_Settings
{
    /**
     * Contains the current class to pull settings from.
     * Either a admin page object or WC_Email object
     *
     * @var WC_Register_WP_Admin_Settings
     */
    protected $object = null;

    /**
     * Hooks into the settings API and starts registering our settings.
     *
     * @since 3.0.0
     * @param WC_Email|WC_Settings_Page $object The object that contains the settings to register.
     * @param string                    $type   Type of settings to register (email or page).
     */
    public function __construct($object, $type)
    {
        // stub
    }

    /**
     * Register's all of our different notification emails as sub groups
     * of email settings.
     *
     * @since  3.0.0
     * @param  array $groups Existing registered groups.
     * @return array
     */
    public function register_email_group($groups)
    {
        // stub
    }

    /**
     * Registers all of the setting form fields for emails to each email type's group.
     *
     * @since  3.0.0
     * @param  array $settings Existing registered settings.
     * @return array
     */
    public function register_email_settings($settings)
    {
        // stub
    }

    /**
     * Registers a setting group, based on admin page ID & label as parent group.
     *
     * @since  3.0.0
     * @param  array $groups Array of previously registered groups.
     * @return array
     */
    public function register_page_group($groups)
    {
        // stub
    }

    /**
     * Registers settings to a specific group.
     *
     * @since  3.0.0
     * @param  array $settings Existing registered settings.
     * @return array
     */
    public function register_page_settings($settings)
    {
        // stub
    }

    /**
     * Register a setting into the format expected for the Settings REST API.
     *
     * @since 3.0.0
     * @param  array $setting Setting data.
     * @return array|bool
     */
    public function register_setting($setting)
    {
        // stub
    }

}

