<?php

namespace ;

/**
 * WC_Admin_Settings Class.
 */
class WC_Admin_Settings extends \
{
    /**
     * Setting pages.
     *
     * @var array
     */
    private static $settings = array(
);

    /**
     * Error messages.
     *
     * @var array
     */
    private static $errors = array(
);

    /**
     * Update messages.
     *
     * @var array
     */
    private static $messages = array(
);

    /**
     * Include the settings page classes.
     */
    public static function get_settings_pages()
    {
        // stub
    }

    /**
     * Save the settings.
     */
    public static function save()
    {
        // stub
    }

    /**
     * Add a message.
     *
     * @param string $text Message.
     */
    public static function add_message($text)
    {
        // stub
    }

    /**
     * Add an error.
     *
     * @param string $text Message.
     */
    public static function add_error($text)
    {
        // stub
    }

    /**
     * Output messages + errors.
     */
    public static function show_messages()
    {
        // stub
    }

    /**
     * Settings page.
     *
     * Handles the display of the main woocommerce settings page in admin.
     */
    public static function output()
    {
        // stub
    }

    /**
     * Get a setting from the settings API.
     *
     * @param string $option_name Option name.
     * @param mixed  $default     Default value.
     * @return mixed
     */
    public static function get_option($option_name, $default = '')
    {
        // stub
    }

    /**
     * Output admin fields.
     *
     * Loops through the woocommerce options array and outputs each field.
     *
     * @param array[] $options Opens array to output.
     */
    public static function output_fields($options)
    {
        // stub
    }

    /**
     * Helper function to get the formatted description and tip HTML for a
     * given form field. Plugins can call this when implementing their own custom
     * settings types.
     *
     * @param  array $value The form field value array.
     * @return array The description and tip as a 2 element array.
     */
    public static function get_field_description($value)
    {
        // stub
    }

    /**
     * Save admin fields.
     *
     * Loops through the woocommerce options array and outputs each field.
     *
     * @param array $options Options array to output.
     * @param array $data    Optional. Data to use for saving. Defaults to $_POST.
     * @return bool
     */
    public static function save_fields($options, $data = null)
    {
        // stub
    }

    /**
     * Checks which method we're using to serve downloads.
     *
     * If using force or x-sendfile, this ensures the .htaccess is in place.
     */
    public static function check_download_folder_protection()
    {
        // stub
    }

}

