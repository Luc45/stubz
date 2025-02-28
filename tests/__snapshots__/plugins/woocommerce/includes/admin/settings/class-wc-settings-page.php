<?php
/**
 * WC_Settings_Page.
 */
abstract class WC_Settings_Page
{
    /**
     * Setting field types.
     *
     * @var string
     */
    public const TYPE_TITLE = 'title';
    public const TYPE_INFO = 'info';
    public const TYPE_SECTIONEND = 'sectionend';
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_DATETIME = 'datetime';
    public const TYPE_DATETIME_LOCAL = 'datetime-local';
    public const TYPE_DATE = 'date';
    public const TYPE_MONTH = 'month';
    public const TYPE_TIME = 'time';
    public const TYPE_WEEK = 'week';
    public const TYPE_NUMBER = 'number';
    public const TYPE_EMAIL = 'email';
    public const TYPE_URL = 'url';
    public const TYPE_TEL = 'tel';
    public const TYPE_COLOR = 'color';
    public const TYPE_TEXTAREA = 'textarea';
    public const TYPE_SELECT = 'select';
    public const TYPE_MULTISELECT = 'multiselect';
    public const TYPE_RADIO = 'radio';
    public const TYPE_CHECKBOX = 'checkbox';
    public const TYPE_IMAGE_WIDTH = 'image_width';
    public const TYPE_SINGLE_SELECT_PAGE = 'single_select_page';
    public const TYPE_SINGLE_SELECT_PAGE_WITH_SEARCH = 'single_select_page_with_search';
    public const TYPE_SINGLE_SELECT_COUNTRY = 'single_select_country';
    public const TYPE_MULTI_SELECT_COUNTRIES = 'multi_select_countries';
    public const TYPE_RELATIVE_DATE_SELECTOR = 'relative_date_selector';
    public const TYPE_SLOTFILL_PLACEHOLDER = 'slotfill_placeholder';
    /**
     * Setting page id.
     *
     * @var string
     */
    protected $id = '';
    /**
     * Setting page icon.
     *
     * @var string
     */
    public $icon = 'settings';
    /**
     * Settings field types which are known.
     *
     * @var string[]
     */
    protected $types = array(
'title',
'info',
'sectionend',
'text',
'password',
'datetime',
'datetime-local',
'date',
'month',
'time',
'week',
'number',
'email',
'url',
'tel',
'color',
'textarea',
'select',
'multiselect',
'radio',
'checkbox',
'image_width',
'single_select_page',
'single_select_page_with_search',
'single_select_country',
'multi_select_countries',
'relative_date_selector',
'slotfill_placeholder'
);
    /**
     * Setting page label.
     *
     * @var string
     */
    protected $label = '';
    /**
     * Setting page is modern.
     *
     * @var bool
     */
    protected $is_modern = false;
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Get settings page ID.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_id()
{
}
    /**
     * Get settings page label.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_label()
{
}
    /**
     * Creates the React mount point for settings slot.
     */
    public function add_settings_slot()
{
}
    /**
     * Add this page to settings.
     *
     * @param array $pages The settings array where we'll add ourselves.
     *
     * @return mixed
     */
    public function add_settings_page($pages)
{
}
    /**
     * Get page settings data to populate the settings editor.
     *
     * @param array $pages The settings array where we'll add data.
     *
     * @return array
     */
    public function add_settings_page_data($pages)
{
}
    /**
     * Get settings data for a specific section.
     *
     * @param string $section_id The ID of the section.
     * @param array  $sections   All sections available.
     * @return array Settings data for the section.
     */
    protected function get_section_settings_data($section_id, $sections)
{
}
    /**
     * Populate the value for a given section setting.
     *
     * @param array $section_setting The setting array to populate.
     * @return array The setting array with populated value.
     */
    protected function populate_setting_value($section_setting)
{
}
    /**
     * Get the custom view given the current tab and section.
     *
     * @param string $section_id The section id.
     * @return string The custom view. HTML output.
     */
    public function get_custom_view($section_id)
{
}
    /**
     * Get the custom type field by calling the action and returning the setting with the content, id, and type.
     *
     * @param string $action  The action to call.
     * @param array  $setting The setting to pass to the action.
     * @return array The setting with the content, id, and type.
     */
    public function get_custom_type_field($action, $setting)
{
}
    /**
     * Get settings array for the default section.
     *
     * External settings classes (registered via 'woocommerce_get_settings_pages' filter)
     * might have redefined this method as "get_settings($section_id='')", thus we need
     * to use this method internally instead of 'get_settings_for_section' to register settings
     * and render settings pages.
     *
     * *But* we can't just redefine the method as "get_settings($section_id='')" here, since this
     * will break on PHP 8 if any external setting class have it as 'get_settings()'.
     *
     * Thus we leave the method signature as is and use 'func_get_arg' to get the setting id
     * if it's supplied, and we use this method internally; but it's deprecated and should
     * otherwise never be used.
     *
     * @deprecated 5.4.0 Use 'get_settings_for_section' (passing an empty string for default section)
     *
     * @return array Settings array, each item being an associative array representing a setting.
     */
    public function get_settings()
{
}
    /**
     * Get settings array.
     *
     * The strategy for getting the settings is as follows:
     *
     * - If a method named 'get_settings_for_{section_id}_section' exists in the class
     *   it will be invoked (for the default '' section, the method name is 'get_settings_for_default_section').
     *   Derived classes can implement these methods as required.
     *
     * - Otherwise, 'get_settings_for_section_core' will be invoked. Derived classes can override it
     *   as an alternative to implementing 'get_settings_for_{section_id}_section' methods.
     *
     * @param string $section_id The id of the section to return settings for, an empty string for the default section.
     *
     * @return array Settings array, each item being an associative array representing a setting.
     */
    final public function get_settings_for_section($section_id)
{
}
    /**
     * Get the settings for a given section.
     * This method is invoked from 'get_settings_for_section' when no 'get_settings_for_{current_section}_section'
     * method exists in the class.
     *
     * When overriding, note that the 'woocommerce_get_settings_' filter must NOT be triggered,
     * as this is already done by 'get_settings_for_section'.
     *
     * @param string $section_id The section name to get the settings for.
     *
     * @return array Settings array, each item being an associative array representing a setting.
     */
    protected function get_settings_for_section_core($section_id)
{
}
    /**
     * Get all sections for this page, both the own ones and the ones defined via filters.
     *
     * @return array
     */
    public function get_sections()
{
}
    /**
     * Get own sections for this page.
     * Derived classes should override this method if they define sections.
     * There should always be one default section with an empty string as identifier.
     *
     * Example:
     * return array(
     *   ''        => __( 'General', 'woocommerce' ),
     *   'foobars' => __( 'Foos & Bars', 'woocommerce' ),
     * );
     *
     * @return array An associative array where keys are section identifiers and the values are translated section names.
     */
    protected function get_own_sections()
{
}
    /**
     * Output sections.
     */
    public function output_sections()
{
}
    /**
     * Output the HTML for the settings.
     */
    public function output()
{
}
    /**
     * Save settings and trigger the 'woocommerce_update_options_'.id action.
     */
    public function save()
{
}
    /**
     * Save settings for current section.
     */
    protected function save_settings_for_current_section()
{
}
    /**
     * Trigger the 'woocommerce_update_options_'.id action.
     *
     * @param string $section_id Section to trigger the action for, or null for current section.
     */
    protected function do_update_options_action($section_id = null)
{
}
}
