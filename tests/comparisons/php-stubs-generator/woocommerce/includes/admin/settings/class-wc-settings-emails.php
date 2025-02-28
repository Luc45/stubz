<?php

/**
 * WC_Settings_Emails.
 */
class WC_Settings_Emails extends \WC_Settings_Page
{
    /**
     * Array of font families supported in email templates
     *
     * @var string[]
     */
    public static $font = array('Arial' => "Arial, 'Helvetica Neue', Helvetica, sans-serif", 'Comic Sans MS' => "'Comic Sans MS', 'Marker Felt-Thin', Arial, sans-serif", 'Courier New' => "'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace", 'Georgia' => "Georgia, Times, 'Times New Roman', serif", 'Lucida' => "'Lucida Sans Unicode', 'Lucida Grande', sans-serif", 'Tahoma' => 'Tahoma, Verdana, Segoe, sans-serif', 'Times New Roman' => "'Times New Roman', Times, Baskerville, Georgia, serif", 'Trebuchet MS' => "'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif", 'Verdana' => 'Verdana, Geneva, sans-serif');
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Setting page icon.
     *
     * @var string
     */
    public $icon = 'atSymbol';
    /**
     * Get own sections.
     *
     * @return array
     */
    protected function get_own_sections()
    {
    }
    /**
     * Get settings array.
     *
     * @return array
     */
    protected function get_settings_for_default_section()
    {
    }
    /**
     * Get custom fonts for emails.
     */
    public function get_custom_fonts()
    {
    }
    /**
     * Output the settings.
     */
    public function output()
    {
    }
    /**
     * Run the 'admin_options' method on a given email.
     * This method exists to easy unit testing.
     *
     * @param object $email The email object to run the method on.
     */
    protected function run_email_admin_options($email)
    {
    }
    /**
     * Save settings.
     */
    public function save()
    {
    }
    /**
     * Output email notification settings.
     */
    public function email_notification_setting()
    {
    }
    /**
     * Creates the React mount point for the email preview.
     */
    public function email_preview()
    {
    }
    /**
     * Creates the React mount point for the single email preview.
     *
     * @param object $email The email object to run the method on.
     */
    public function email_preview_single($email)
    {
    }
    /**
     * Creates the React mount point for the email image url.
     *
     * @param array $value Field value array.
     */
    public function email_image_url($value)
    {
    }
    /**
     * Creates the email font family field with custom font family applied to each option.
     *
     * @param array $value Field value array.
     */
    public function email_font_family($value)
    {
    }
    /**
     * Creates the React mount point for the email color palette title.
     *
     * @param array $value Field value array.
     */
    public function email_color_palette($value)
    {
    }
}