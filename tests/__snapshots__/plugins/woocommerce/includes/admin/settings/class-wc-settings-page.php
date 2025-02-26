<?php

namespace ;

/**
 * WC_Settings_Page.
 */
abstract class WC_Settings_Page extends \
{
    const TYPE_TITLE = 'title';

    const TYPE_INFO = 'info';

    const TYPE_SECTIONEND = 'sectionend';

    const TYPE_TEXT = 'text';

    const TYPE_PASSWORD = 'password';

    const TYPE_DATETIME = 'datetime';

    const TYPE_DATETIME_LOCAL = 'datetime-local';

    const TYPE_DATE = 'date';

    const TYPE_MONTH = 'month';

    const TYPE_TIME = 'time';

    const TYPE_WEEK = 'week';

    const TYPE_NUMBER = 'number';

    const TYPE_EMAIL = 'email';

    const TYPE_URL = 'url';

    const TYPE_TEL = 'tel';

    const TYPE_COLOR = 'color';

    const TYPE_TEXTAREA = 'textarea';

    const TYPE_SELECT = 'select';

    const TYPE_MULTISELECT = 'multiselect';

    const TYPE_RADIO = 'radio';

    const TYPE_CHECKBOX = 'checkbox';

    const TYPE_IMAGE_WIDTH = 'image_width';

    const TYPE_SINGLE_SELECT_PAGE = 'single_select_page';

    const TYPE_SINGLE_SELECT_PAGE_WITH_SEARCH = 'single_select_page_with_search';

    const TYPE_SINGLE_SELECT_COUNTRY = 'single_select_country';

    const TYPE_MULTI_SELECT_COUNTRIES = 'multi_select_countries';

    const TYPE_RELATIVE_DATE_SELECTOR = 'relative_date_selector';

    const TYPE_SLOTFILL_PLACEHOLDER = 'slotfill_placeholder';

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
  0 => 'title',
  1 => 'info',
  2 => 'sectionend',
  3 => 'text',
  4 => 'password',
  5 => 'datetime',
  6 => 'datetime-local',
  7 => 'date',
  8 => 'month',
  9 => 'time',
  10 => 'week',
  11 => 'number',
  12 => 'email',
  13 => 'url',
  14 => 'tel',
  15 => 'color',
  16 => 'textarea',
  17 => 'select',
  18 => 'multiselect',
  19 => 'radio',
  20 => 'checkbox',
  21 => 'image_width',
  22 => 'single_select_page',
  23 => 'single_select_page_with_search',
  24 => 'single_select_country',
  25 => 'multi_select_countries',
  26 => 'relative_date_selector',
  27 => 'slotfill_placeholder',
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
     * Whether the output method has been called.
     *
     * @var bool
     */
    private $output_called = false;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Get settings page ID.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_id()
    {
        // stub
    }

    /**
     * Get settings page label.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_label()
    {
        // stub
    }

    /**
     * Creates the React mount point for settings slot.
     */
    public function add_settings_slot()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Populate the value for a given section setting.
     *
     * @param array $section_setting The setting array to populate.
     * @return array The setting array with populated value.
     */
    protected function populate_setting_value($section_setting)
    {
        // stub
    }

    /**
     * Get the custom view given the current tab and section.
     *
     * @param string $section_id The section id.
     * @return string The custom view. HTML output.
     */
    public function get_custom_view($section_id)
    {
        // stub
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
        // stub
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
        // stub
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
    public final function get_settings_for_section($section_id)
    {
        // stub
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
        // stub
    }

    /**
     * Get all sections for this page, both the own ones and the ones defined via filters.
     *
     * @return array
     */
    public function get_sections()
    {
        // stub
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
        // stub
    }

    /**
     * Output sections.
     */
    public function output_sections()
    {
        // stub
    }

    /**
     * Output the HTML for the settings.
     */
    public function output()
    {
        // stub
    }

    /**
     * Save settings and trigger the 'woocommerce_update_options_'.id action.
     */
    public function save()
    {
        // stub
    }

    /**
     * Save settings for current section.
     */
    protected function save_settings_for_current_section()
    {
        // stub
    }

    /**
     * Trigger the 'woocommerce_update_options_'.id action.
     *
     * @param string $section_id Section to trigger the action for, or null for current section.
     */
    protected function do_update_options_action($section_id = null)
    {
        // stub
    }

}

