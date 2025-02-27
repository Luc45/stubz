<?php

/**
 * WC_Settings_API class.
 */
abstract class WC_Settings_API
{
    /**
     * The plugin ID. Used for option names.
     *
     * @var string
     */
    public $plugin_id = 'woocommerce_';

    /**
     * ID of the class extending the settings API. Used in option names.
     *
     * @var string
     */
    public $id = '';

    /**
     * Validation errors.
     *
     * @var array of strings
     */
    public $errors = array (
);

    /**
     * Setting values.
     *
     * @var array
     */
    public $settings = array (
);

    /**
     * Form option fields.
     *
     * @var array
     */
    public $form_fields = array (
);

    /**
     * The posted settings data. When empty, $_POST data will be used.
     *
     * @var array
     */
    protected $data = array (
);

    /**
     * Get the form fields after they are initialized.
     *
     * @return array of options
     */
    public function get_form_fields()
    {
        // stub
    }

    /**
     * Set default required properties for each field.
     *
     * @param array $field Setting field array.
     * @return array
     */
    protected function set_defaults($field)
    {
        // stub
    }

    /**
     * Output the admin options table.
     */
    public function admin_options()
    {
        // stub
    }

    /**
     * Initialise settings form fields.
     *
     * Add an array of fields to be displayed on the gateway's settings screen.
     *
     * @since  1.0.0
     */
    public function init_form_fields()
    {
        // stub
    }

    /**
     * Return the name of the option in the WP DB.
     *
     * @since 2.6.0
     * @return string
     */
    public function get_option_key()
    {
        // stub
    }

    /**
     * Get a fields type. Defaults to "text" if not set.
     *
     * @param  array $field Field key.
     * @return string
     */
    public function get_field_type($field)
    {
        // stub
    }

    /**
     * Get a fields default value. Defaults to "" if not set.
     *
     * @param  array $field Field key.
     * @return string
     */
    public function get_field_default($field)
    {
        // stub
    }

    /**
     * Get a field's posted and validated value.
     *
     * @param string $key Field key.
     * @param array  $field Field array.
     * @param array  $post_data Posted data.
     * @return string
     */
    public function get_field_value($key, $field, $post_data = array (
))
    {
        // stub
    }

    /**
     * Sets the POSTed data. This method can be used to set specific data, instead of taking it from the $_POST array.
     *
     * @param array $data Posted data.
     */
    public function set_post_data($data = array (
))
    {
        // stub
    }

    /**
     * Returns the POSTed data, to be used to save the settings.
     *
     * @return array
     */
    public function get_post_data()
    {
        // stub
    }

    /**
     * Update a single option.
     *
     * @since 3.4.0
     * @param string $key Option key.
     * @param mixed  $value Value to set.
     * @return bool was anything saved?
     */
    public function update_option($key, $value = '')
    {
        // stub
    }

    /**
     * Processes and saves options.
     * If there is an error thrown, will continue to save and validate fields, but will leave the erroring field out.
     *
     * @return bool was anything saved?
     */
    public function process_admin_options()
    {
        // stub
    }

    /**
     * Add an error message for display in admin on save.
     *
     * @param string $error Error message.
     */
    public function add_error($error)
    {
        // stub
    }

    /**
     * Get admin error messages.
     */
    public function get_errors()
    {
        // stub
    }

    /**
     * Display admin error messages.
     */
    public function display_errors()
    {
        // stub
    }

    /**
     * Initialise Settings.
     *
     * Store all settings in a single database entry
     * and make sure the $settings array is either the default
     * or the settings stored in the database.
     *
     * @since 1.0.0
     * @uses get_option(), add_option()
     */
    public function init_settings()
    {
        // stub
    }

    /**
     * Get option from DB.
     *
     * Gets an option from the settings API, using defaults if necessary to prevent undefined notices.
     *
     * @param  string $key Option key.
     * @param  mixed  $empty_value Value when empty.
     * @return string The value specified for the option or a default value for the option.
     */
    public function get_option($key, $empty_value = null)
    {
        // stub
    }

    /**
     * Prefix key for settings.
     *
     * @param  string $key Field key.
     * @return string
     */
    public function get_field_key($key)
    {
        // stub
    }

    /**
     * Generate Settings HTML.
     *
     * Generate the HTML for the fields on the "settings" screen.
     *
     * @param array $form_fields (default: array()) Array of form fields.
     * @param bool  $echo Echo or return.
     * @return string the html for the settings
     * @since  1.0.0
     * @uses   method_exists()
     */
    public function generate_settings_html($form_fields = array (
), $echo = true)
    {
        // stub
    }

    /**
     * Get HTML for tooltips.
     *
     * @param  array $data Data for the tooltip.
     * @return string
     */
    public function get_tooltip_html($data)
    {
        // stub
    }

    /**
     * Get HTML for descriptions.
     *
     * @param  array $data Data for the description.
     * @return string
     */
    public function get_description_html($data)
    {
        // stub
    }

    /**
     * Get custom attributes.
     *
     * @param  array $data Field data.
     * @return string
     */
    public function get_custom_attribute_html($data)
    {
        // stub
    }

    /**
     * Generate Text Input HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_text_html($key, $data)
    {
        // stub
    }

    /**
     * Generates HTML for the 'safe_text' input type (mostly used for gateway-related settings).
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @return string
     *
     * @since 7.6.0
     */
    public function generate_safe_text_html($key, $data)
    {
        // stub
    }

    /**
     * Generate Price Input HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_price_html($key, $data)
    {
        // stub
    }

    /**
     * Generate Decimal Input HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_decimal_html($key, $data)
    {
        // stub
    }

    /**
     * Generate Password Input HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_password_html($key, $data)
    {
        // stub
    }

    /**
     * Generate Color Picker Input HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_color_html($key, $data)
    {
        // stub
    }

    /**
     * Generate Textarea HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_textarea_html($key, $data)
    {
        // stub
    }

    /**
     * Generate Checkbox HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_checkbox_html($key, $data)
    {
        // stub
    }

    /**
     * Generate Select HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_select_html($key, $data)
    {
        // stub
    }

    /**
     * Generate Multiselect HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_multiselect_html($key, $data)
    {
        // stub
    }

    /**
     * Generate Title HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  1.0.0
     * @return string
     */
    public function generate_title_html($key, $data)
    {
        // stub
    }

    /**
     * Validate Text Field.
     *
     * Make sure the data is escaped correctly, etc.
     *
     * @param  string $key Field key.
     * @param  string $value Posted Value.
     * @return string
     */
    public function validate_text_field($key, $value)
    {
        // stub
    }

    /**
     * Sanitize 'Safe Text' fields.
     *
     * These fields are similar to regular text fields, but a much  smaller set of HTML tags are allowed. By default,
     * this means `<br>`, `<img>`, `<p>` and `<span>` tags.
     *
     * Note: this is a sanitization method, rather than a validation method (the name is due to some historic naming
     * choices).
     *
     * @param  string $key   Field key (currently unused).
     * @param  string $value Posted Value.
     *
     * @return string
     */
    public function validate_safe_text_field(string $key, string|null $value): string
    {
        // stub
    }

    /**
     * Validate Price Field.
     *
     * Make sure the data is escaped correctly, etc.
     *
     * @param  string $key Field key.
     * @param  string $value Posted Value.
     * @return string
     */
    public function validate_price_field($key, $value)
    {
        // stub
    }

    /**
     * Validate Decimal Field.
     *
     * Make sure the data is escaped correctly, etc.
     *
     * @param  string $key Field key.
     * @param  string $value Posted Value.
     * @return string
     */
    public function validate_decimal_field($key, $value)
    {
        // stub
    }

    /**
     * Validate Password Field. No input sanitization is used to avoid corrupting passwords.
     *
     * @param  string $key Field key.
     * @param  string $value Posted Value.
     * @return string
     */
    public function validate_password_field($key, $value)
    {
        // stub
    }

    /**
     * Validate Textarea Field.
     *
     * @since 9.0.0 No longer allows storing IFRAME, which was allowed for "ShareThis" integration no longer found in core.
     * @param  string $key Field key.
     * @param  string $value Posted Value.
     * @return string
     */
    public function validate_textarea_field($key, $value)
    {
        // stub
    }

    /**
     * Validate Checkbox Field.
     *
     * If not set, return "no", otherwise return "yes".
     *
     * @param  string $key Field key.
     * @param  string $value Posted Value.
     * @return string
     */
    public function validate_checkbox_field($key, $value)
    {
        // stub
    }

    /**
     * Validate Select Field.
     *
     * @param  string $key Field key.
     * @param  string $value Posted Value.
     * @return string
     */
    public function validate_select_field($key, $value)
    {
        // stub
    }

    /**
     * Validate Multiselect Field.
     *
     * @param  string $key Field key.
     * @param  string $value Posted Value.
     * @return string|array
     */
    public function validate_multiselect_field($key, $value)
    {
        // stub
    }

    /**
     * Validate the data on the "Settings" form.
     *
     * @deprecated 2.6.0 No longer used.
     * @param array $form_fields Array of fields.
     */
    public function validate_settings_fields($form_fields = array (
))
    {
        // stub
    }

    /**
     * Format settings if needed.
     *
     * @deprecated 2.6.0 Unused.
     * @param  array $value Value to format.
     * @return array
     */
    public function format_settings($value)
    {
        // stub
    }

}
