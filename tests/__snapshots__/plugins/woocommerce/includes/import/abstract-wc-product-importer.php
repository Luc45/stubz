<?php

namespace ;

/**
 * WC_Product_Importer Class.
 */
abstract class WC_Product_Importer extends \
{
    /**
     * CSV file.
     *
     * @var string
     */
    protected $file = '';

    /**
     * The file position after the last read.
     *
     * @var int
     */
    protected $file_position = 0;

    /**
     * Importer parameters.
     *
     * @var array
     */
    protected $params = array(
);

    /**
     * Raw keys - CSV raw headers.
     *
     * @var array
     */
    protected $raw_keys = array(
);

    /**
     * Mapped keys - CSV headers.
     *
     * @var array
     */
    protected $mapped_keys = array(
);

    /**
     * Raw data.
     *
     * @var array
     */
    protected $raw_data = array(
);

    /**
     * Raw data.
     *
     * @var array
     */
    protected $file_positions = array(
);

    /**
     * Parsed data.
     *
     * @var array
     */
    protected $parsed_data = array(
);

    /**
     * Start time of current import.
     *
     * (default value: 0)
     *
     * @var int
     */
    protected $start_time = 0;

    /**
     * Get file raw headers.
     *
     * @return array
     */
    public function get_raw_keys()
    {
        // stub
    }

    /**
     * Get file mapped headers.
     *
     * @return array
     */
    public function get_mapped_keys()
    {
        // stub
    }

    /**
     * Get raw data.
     *
     * @return array
     */
    public function get_raw_data()
    {
        // stub
    }

    /**
     * Get parsed data.
     *
     * @return array
     */
    public function get_parsed_data()
    {
        // stub
    }

    /**
     * Get importer parameters.
     *
     * @return array
     */
    public function get_params()
    {
        // stub
    }

    /**
     * Get file pointer position from the last read.
     *
     * @return int
     */
    public function get_file_position()
    {
        // stub
    }

    /**
     * Get file pointer position as a percentage of file size.
     *
     * @return int
     */
    public function get_percent_complete()
    {
        // stub
    }

    /**
     * Prepare a single product for create or update.
     *
     * @param  array $data     Item data.
     * @return WC_Product|WP_Error
     */
    protected function get_product_object($data)
    {
        // stub
    }

    /**
     * Process a single item and save.
     *
     * @throws Exception If item cannot be processed.
     * @param  array $data Raw CSV data.
     * @return array|WP_Error
     */
    protected function process_item($data)
    {
        // stub
    }

    /**
     * Convert raw image URLs to IDs and set.
     *
     * @param WC_Product $product Product instance.
     * @param array      $data    Item data.
     */
    protected function set_image_data(&$product, $data)
    {
        // stub
    }

    /**
     * Append meta data.
     *
     * @param WC_Product $product Product instance.
     * @param array      $data    Item data.
     */
    protected function set_meta_data(&$product, $data)
    {
        // stub
    }

    /**
     * Set product data.
     *
     * @param WC_Product $product Product instance.
     * @param array      $data    Item data.
     * @throws Exception If data cannot be set.
     */
    protected function set_product_data(&$product, $data)
    {
        // stub
    }

    /**
     * Set variation data.
     *
     * @param WC_Product $variation Product instance.
     * @param array      $data    Item data.
     * @return WC_Product|WP_Error
     * @throws Exception If data cannot be set.
     */
    protected function set_variation_data(&$variation, $data)
    {
        // stub
    }

    /**
     * Get variation parent attributes and set "is_variation".
     *
     * @param  array      $attributes Attributes list.
     * @param  WC_Product $parent     Parent product data.
     * @return array
     */
    protected function get_variation_parent_attributes($attributes, $parent)
    {
        // stub
    }

    /**
     * Get attachment ID.
     *
     * @param  string $url        Attachment URL.
     * @param  int    $product_id Product ID.
     * @return int
     * @throws Exception If attachment cannot be loaded.
     */
    public function get_attachment_id_from_url($url, $product_id)
    {
        // stub
    }

    /**
     * Get attribute taxonomy ID from the imported data.
     * If does not exists register a new attribute.
     *
     * @param  string $raw_name Attribute name.
     * @return int
     * @throws Exception If taxonomy cannot be loaded.
     */
    public function get_attribute_taxonomy_id($raw_name)
    {
        // stub
    }

    /**
     * Memory exceeded
     *
     * Ensures the batch process never exceeds 90%
     * of the maximum WordPress memory.
     *
     * @return bool
     */
    protected function memory_exceeded()
    {
        // stub
    }

    /**
     * Get memory limit
     *
     * @return int
     */
    protected function get_memory_limit()
    {
        // stub
    }

    /**
     * Time exceeded.
     *
     * Ensures the batch never exceeds a sensible time limit.
     * A timeout limit of 30s is common on shared hosting.
     *
     * @return bool
     */
    protected function time_exceeded()
    {
        // stub
    }

    /**
     * Explode CSV cell values using commas by default, and handling escaped
     * separators.
     *
     * @since  3.2.0
     * @param  string $value     Value to explode.
     * @param  string $separator Separator separating each value. Defaults to comma.
     * @return array
     */
    protected function explode_values($value, $separator = ',')
    {
        // stub
    }

    /**
     * Remove formatting and trim each value.
     *
     * @since  3.2.0
     * @param  string $value Value to format.
     * @return string
     */
    protected function explode_values_formatter($value)
    {
        // stub
    }

    /**
     * The exporter prepends a ' to escape fields that start with =, +, - or @.
     * Remove the prepended ' character preceding those characters.
     *
     * @since 3.5.2
     * @param  string $value A string that may or may not have been escaped with '.
     * @return string
     */
    protected function unescape_data($value)
    {
        // stub
    }

}

