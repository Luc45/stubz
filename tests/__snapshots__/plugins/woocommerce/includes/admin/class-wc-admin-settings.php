<?php

/**
 * WC_Admin_Settings Class.
 */
class WC_Admin_Settings
{
    /**
     * Setting pages.
     *
     * @var array
     */
    private static $settings = array();

    /**
     * Error messages.
     *
     * @var array
     */
    private static $errors = array();

    /**
     * Update messages.
     *
     * @var array
     */
    private static $messages = array();

    /**
     * Include the settings page classes.
     */
    public static function get_settings_pages()
{
}
    /**
     * Save the settings.
     */
    public static function save()
{
}
    /**
     * Add a message.
     *
     * @param string $text Message.
     */
    public static function add_message($text)
{
}
    /**
     * Add an error.
     *
     * @param string $text Message.
     */
    public static function add_error($text)
{
}
    /**
     * Output messages + errors.
     */
    public static function show_messages()
{
}
    /**
     * Settings page.
     *
     * Handles the display of the main woocommerce settings page in admin.
     */
    public static function output()
{
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
}
    /**
     * Checks which method we're using to serve downloads.
     *
     * If using force or x-sendfile, this ensures the .htaccess is in place.
     */
    public static function check_download_folder_protection()
{
}
}
