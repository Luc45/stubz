<?php
/**
 * WC_Product_CSV_Importer Class.
 */
class WC_Product_CSV_Importer extends \WC_Product_Importer
{
    /**
     * Tracks current row being parsed.
     *
     * @var integer
     */
    protected $parsing_raw_data_index = 0;
    /**
     * Initialize importer.
     *
     * @param string $file   File to read.
     * @param array  $params Arguments for the parser.
     */
    public function __construct($file, $params = array())
{
}
    /**
     * Convert a string from the input encoding to UTF-8.
     *
     * @param string $value The string to convert.
     * @return string The converted string.
     */
    private function adjust_character_encoding($value)
{
}
    /**
     * Read file.
     */
    protected function read_file()
{
}
    /**
     * Remove UTF-8 BOM signature.
     *
     * @param string $string String to handle.
     *
     * @return string
     */
    protected function remove_utf8_bom($string)
{
}
    /**
     * Set file mapped keys.
     */
    protected function set_mapped_keys()
{
}
    /**
     * Parse relative field and return product ID.
     *
     * Handles `id:xx` and SKUs.
     *
     * If mapping to an id: and the product ID does not exist, this link is not
     * valid.
     *
     * If mapping to a SKU and the product ID does not exist, a temporary object
     * will be created so it can be updated later.
     *
     * @param string $value Field value.
     *
     * @return int|string
     */
    public function parse_relative_field($value)
{
}
    /**
     * Parse the ID field.
     *
     * If we're not doing an update, create a placeholder product so mapping works
     * for rows following this one.
     *
     * @param string $value Field value.
     *
     * @return int
     */
    public function parse_id_field($value)
{
}
    /**
     * Parse relative comma-delineated field and return product ID.
     *
     * @param string $value Field value.
     *
     * @return array
     */
    public function parse_relative_comma_field($value)
{
}
    /**
     * Parse a comma-delineated field from a CSV.
     *
     * @param string $value Field value.
     *
     * @return array
     */
    public function parse_comma_field($value)
{
}
    /**
     * Parse a field that is generally '1' or '0' but can be something else.
     *
     * @param string $value Field value.
     *
     * @return bool|string
     */
    public function parse_bool_field($value)
{
}
    /**
     * Parse a float value field.
     *
     * @param string $value Field value.
     *
     * @return float|string
     */
    public function parse_float_field($value)
{
}
    /**
     * Parse the stock qty field.
     *
     * @param string $value Field value.
     *
     * @return float|string
     */
    public function parse_stock_quantity_field($value)
{
}
    /**
     * Parse the tax status field.
     *
     * @param string $value Field value.
     *
     * @return string
     */
    public function parse_tax_status_field($value)
{
}
    /**
     * Parse a category field from a CSV.
     * Categories are separated by commas and subcategories are "parent > subcategory".
     *
     * @param string $value Field value.
     *
     * @return array of arrays with "parent" and "name" keys.
     */
    public function parse_categories_field($value)
{
}
    /**
     * Parse a tag field from a CSV.
     *
     * @param string $value Field value.
     *
     * @return array
     */
    public function parse_tags_field($value)
{
}
    /**
     * Parse a tag field from a CSV with space separators.
     *
     * @param string $value Field value.
     *
     * @return array
     */
    public function parse_tags_spaces_field($value)
{
}
    /**
     * Parse a shipping class field from a CSV.
     *
     * @param string $value Field value.
     *
     * @return int
     */
    public function parse_shipping_class_field($value)
{
}
    /**
     * Parse images list from a CSV. Images can be filenames or URLs.
     *
     * @param string $value Field value.
     *
     * @return array
     */
    public function parse_images_field($value)
{
}
    /**
     * Parse dates from a CSV.
     * Dates requires the format YYYY-MM-DD and time is optional.
     *
     * @param string $value Field value.
     *
     * @return string|null
     */
    public function parse_date_field($value)
{
}
    /**
     * Parse dates from a CSV.
     * Dates can be Unix timestamps or in any format supported by strtotime().
     *
     * @param string $value Field value.
     *
     * @return string|null
     */
    public function parse_datetime_field($value)
{
}
    /**
     * Parse backorders from a CSV.
     *
     * @param string $value Field value.
     *
     * @return string
     */
    public function parse_backorders_field($value)
{
}
    /**
     * Just skip current field.
     *
     * By default is applied wc_clean() to all not listed fields
     * in self::get_formatting_callback(), use this method to skip any formatting.
     *
     * @param string $value Field value.
     *
     * @return string
     */
    public function parse_skip_field($value)
{
}
    /**
     * Parse download file urls, we should allow shortcodes here.
     *
     * Allow shortcodes if present, otherwise esc_url the value.
     *
     * @param string $value Field value.
     *
     * @return string
     */
    public function parse_download_file_field($value)
{
}
    /**
     * Parse an int value field
     *
     * @param int $value field value.
     *
     * @return int
     */
    public function parse_int_field($value)
{
}
    /**
     * Parse a description value field
     *
     * @param string $description field value.
     *
     * @return string
     */
    public function parse_description_field($description)
{
}
    /**
     * Parse the published field. 1 is published, 0 is private, -1 is draft.
     * Alternatively, 'true' can be used for published and 'false' for draft.
     *
     * @param string $value Field value.
     *
     * @return float|string
     */
    public function parse_published_field($value)
{
}
    /**
     * Deprecated get formatting callback method.
     *
     * @deprecated 4.3.0
     * @return array
     */
    protected function get_formating_callback()
{
}
    /**
     * Get formatting callback.
     *
     * @since 4.3.0
     * @return array
     */
    protected function get_formatting_callback()
{
}
    /**
     * Check if strings starts with determined word.
     *
     * @param string $haystack Complete sentence.
     * @param string $needle   Excerpt.
     *
     * @return bool
     */
    protected function starts_with($haystack, $needle)
{
}
    /**
     * Expand special and internal data into the correct formats for the product CRUD.
     *
     * @param array $data Data to import.
     *
     * @return array
     */
    protected function expand_data($data)
{
}
    /**
     * Map and format raw data to known fields.
     */
    protected function set_parsed_data()
{
}
    /**
     * Get a string to identify the row from parsed data.
     *
     * @param array $parsed_data Parsed data.
     *
     * @return string
     */
    protected function get_row_id($parsed_data)
{
}
    /**
     * Process importer.
     *
     * Do not import products with IDs or SKUs that already exist if option
     * update existing is false, and likewise, if updating products, do not
     * process rows which do not exist if an ID/SKU is provided.
     *
     * @return array
     */
    public function import()
{
}
}
