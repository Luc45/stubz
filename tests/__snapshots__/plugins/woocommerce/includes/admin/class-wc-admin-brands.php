<?php

/**
 * WC_Brands_Admin class.
 */
class WC_Brands_Admin
{
    /**
     * Settings array (Deprecated).
     *
     * @var array
     */
    public $settings_tabs = null;

    /**
     * Settings form fields (Deprecated).
     *
     * @var array
     */
    private $settings = null;

    /**
     * Admin fields.
     *
     * @var array
     */
    public $fields = array();

    /**
     * __construct function.
     */
    public function __construct()
{
}
    /**
     * Add the settings for the new "Brands" subtab.
     *
     * @since  9.4.0
     *
     * @param array $settings Settings.
     * @param array $current_section Current section.
     */
    public function add_settings_section($settings, $current_section)
{
}
    /**
     * Add a new "Brands" subtab to the "Products" tab.
     *
     * @since  9.4.0
     * @param array $sections Sections.
     */
    public function add_settings_tab($sections)
{
}
    /**
     * Display coupon filter fields relating to brands.
     *
     * @since  9.4.0
     * @return  void
     */
    public function add_coupon_brands_fields()
{
}
    /**
     * Save coupon filter fields relating to brands.
     *
     * @since  9.4.0
     * @param int $post_id Post ID.
     * @return  void
     */
    public function save_coupon_brands($post_id)
{
}
    /**
     * Prepare form fields to be used in the various tabs.
     */
    public function init_form_fields()
{
}
    /**
     * Enqueue scripts.
     *
     * @return void
     */
    public function scripts()
{
}
    /**
     * Enqueue styles.
     *
     * @return void
     */
    public function styles()
{
}
    /**
     * Admin settings function.
     */
    public function admin_settings()
{
}
    /**
     * Save admin settings function.
     */
    public function save_admin_settings()
{
}
    /**
     * Category thumbnails.
     */
    public function add_thumbnail_field()
{
}
    /**
     * Edit thumbnail field row.
     *
     * @param WP_Term $term     Current taxonomy term object.
     */
    public function edit_thumbnail_field($term)
{
}
    /**
     * Saves thumbnail field.
     *
     * @param int $term_id Term ID.
     *
     * @return void
     */
    public function thumbnail_field_save($term_id)
{
}
    /**
     * Description for brand page.
     */
    public function taxonomy_description()
{
}
    /**
     * Sort brands function.
     *
     * @param array $sortable Sortable array.
     */
    public function sort_brands($sortable)
{
}
    /**
     * Add brands column in second-to-last position.
     *
     * @since 9.4.0
     * @param mixed $columns Columns.
     * @return array
     */
    public function product_columns($columns)
{
}
    /**
     * Columns function.
     *
     * @param mixed $columns Columns.
     */
    public function columns($columns)
{
}
    /**
     * Column function.
     *
     * @param mixed $columns Columns.
     * @param mixed $column Column.
     * @param mixed $id ID.
     */
    public function column($columns, $column, $id)
{
}
    /**
     * Renders either dropdown or a search field for brands depending on the threshold value of
     * woocommerce_product_brand_filter_threshold filter.
     */
    public function render_product_brand_filter()
{
}
    /**
     * Add brand base permalink setting.
     */
    public function add_brand_base_setting()
{
}
    /**
     * Add a slug input box.
     */
    public function product_brand_slug_input()
{
}
    /**
     * Save permalnks settings.
     *
     * We need to save the options ourselves;
     * settings api does not trigger save for the permalinks page.
     */
    public function save_permalink_settings()
{
}
    /**
     * Validate the product base.
     *
     * Must have an additional slug, not just the brand as the base.
     *
     * @param array $value Value.
     */
    public function validate_product_base($value)
{
}
    /**
     * Add csv column for importing/exporting.
     *
     * @param  array $options Mapping options.
     * @return array $options
     */
    public function add_column_to_importer_exporter($options)
{
}
    /**
     * Add default column mapping.
     *
     * @param  array $mappings Mappings.
     * @return array $mappings
     */
    public function add_default_column_mapping($mappings)
{
}
    /**
     * Add brands to newly imported product.
     *
     * @param WC_Product $product Product being imported.
     * @param array      $data    Raw CSV data.
     */
    public function process_import($product, $data)
{
}
    /**
     * Parse brands field from a CSV during import.
     *
     * Based on WC_Product_CSV_Importer::parse_categories_field()
     *
     * @param string $value Field value.
     * @return array
     */
    public function parse_brands_field($value)
{
}
    /**
     * Get brands column value for csv export.
     *
     * @param string     $value   What will be exported.
     * @param WC_Product $product Product being exported.
     * @return string    Brands separated by commas and child brands as "parent > child".
     */
    public function get_column_value_brand_ids($value, $product)
{
}
}
