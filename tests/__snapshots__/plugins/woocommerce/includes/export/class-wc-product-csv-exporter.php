<?php

namespace ;

/**
 * WC_Product_CSV_Exporter Class.
 */
class WC_Product_CSV_Exporter extends \WC_CSV_Batch_Exporter
{
    /**
     * Type of export used in filter names.
     *
     * @var string
     */
    protected $export_type = 'product';

    /**
     * Should meta be exported?
     *
     * @var boolean
     */
    protected $enable_meta_export = false;

    /**
     * Which product types are being exported.
     *
     * @var array
     */
    protected $product_types_to_export = array(
);

    /**
     * Products belonging to what category should be exported.
     *
     * @var string
     */
    protected $product_category_to_export = array(
);

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Should meta be exported?
     *
     * @param bool $enable_meta_export Should meta be exported.
     *
     * @since 3.1.0
     */
    public function enable_meta_export($enable_meta_export)
    {
        // stub
    }

    /**
     * Product types to export.
     *
     * @param array $product_types_to_export List of types to export.
     *
     * @since 3.1.0
     */
    public function set_product_types_to_export($product_types_to_export)
    {
        // stub
    }

    /**
     * Product category to export
     *
     * @param string $product_category_to_export Product category slug to export, empty string exports all.
     *
     * @since  3.5.0
     * @return void
     */
    public function set_product_category_to_export($product_category_to_export)
    {
        // stub
    }

    /**
     * Return an array of columns to export.
     *
     * @since  3.1.0
     * @return array
     */
    public function get_default_column_names()
    {
        // stub
    }

    /**
     * Prepare data for export.
     *
     * @since 3.1.0
     */
    public function prepare_data_to_export()
    {
        // stub
    }

    /**
     * Take a product and generate row data from it for export.
     *
     * @param WC_Product $product WC_Product object.
     *
     * @return array
     */
    protected function generate_row_data($product)
    {
        // stub
    }

    /**
     * Get published value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return int
     */
    protected function get_column_value_published($product)
    {
        // stub
    }

    /**
     * Get formatted sale price.
     *
     * @param WC_Product $product Product being exported.
     *
     * @return string
     */
    protected function get_column_value_sale_price($product)
    {
        // stub
    }

    /**
     * Get formatted regular price.
     *
     * @param WC_Product $product Product being exported.
     *
     * @return string
     */
    protected function get_column_value_regular_price($product)
    {
        // stub
    }

    /**
     * Get product_cat value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_category_ids($product)
    {
        // stub
    }

    /**
     * Get product_tag value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_tag_ids($product)
    {
        // stub
    }

    /**
     * Get product_shipping_class value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_shipping_class_id($product)
    {
        // stub
    }

    /**
     * Get images value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_images($product)
    {
        // stub
    }

    /**
     * Prepare linked products for export.
     *
     * @param int[] $linked_products Array of linked product ids.
     *
     * @since  3.1.0
     * @return string
     */
    protected function prepare_linked_products_for_export($linked_products)
    {
        // stub
    }

    /**
     * Get cross_sell_ids value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_cross_sell_ids($product)
    {
        // stub
    }

    /**
     * Get upsell_ids value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_upsell_ids($product)
    {
        // stub
    }

    /**
     * Get parent_id value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_parent_id($product)
    {
        // stub
    }

    /**
     * Get grouped_products value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_grouped_products($product)
    {
        // stub
    }

    /**
     * Get download_limit value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_download_limit($product)
    {
        // stub
    }

    /**
     * Get download_expiry value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_download_expiry($product)
    {
        // stub
    }

    /**
     * Get stock value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_stock($product)
    {
        // stub
    }

    /**
     * Get stock status value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_stock_status($product)
    {
        // stub
    }

    /**
     * Get backorders.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_backorders($product)
    {
        // stub
    }

    /**
     * Get low stock amount value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.5.0
     * @return int|string Empty string if value not set
     */
    protected function get_column_value_low_stock_amount($product)
    {
        // stub
    }

    /**
     * Get type value.
     *
     * @param WC_Product $product Product being exported.
     *
     * @since  3.1.0
     * @return string
     */
    protected function get_column_value_type($product)
    {
        // stub
    }

    /**
     * Filter description field for export.
     * Convert newlines to '\n'.
     *
     * @param string $description Product description text to filter.
     *
     * @since  3.5.4
     * @return string
     */
    protected function filter_description_field($description)
    {
        // stub
    }

    /**
     * Export downloads.
     *
     * @param WC_Product $product Product being exported.
     * @param array      $row     Row being exported.
     *
     * @since 3.1.0
     */
    protected function prepare_downloads_for_export($product, &$row)
    {
        // stub
    }

    /**
     * Export attributes data.
     *
     * @param WC_Product $product Product being exported.
     * @param array      $row     Row being exported.
     *
     * @since 3.1.0
     */
    protected function prepare_attributes_for_export($product, &$row)
    {
        // stub
    }

    /**
     * Export meta data.
     *
     * @param WC_Product $product Product being exported.
     * @param array      $row Row data.
     *
     * @since 3.1.0
     */
    protected function prepare_meta_for_export($product, &$row)
    {
        // stub
    }

}

