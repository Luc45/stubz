<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ProductSchema class.
 */
class ProductSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product';
    /**
     * Image attachment schema instance.
     *
     * @var ImageAttachmentSchema
     */
    protected $image_attachment_schema;
    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
    {
    }
    /**
     * Product schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a WooCommerce product into an object suitable for the response.
     *
     * @param \WC_Product $product Product instance.
     * @return array
     */
    public function get_item_response($product)
    {
    }
    /**
     * Get list of product images.
     *
     * @param \WC_Product $product Product instance.
     * @return array
     */
    protected function get_images(\WC_Product $product)
    {
    }
    /**
     * Gets remaining stock amount for a product.
     *
     * @param \WC_Product $product Product instance.
     * @return integer|null
     */
    protected function get_remaining_stock(\WC_Product $product)
    {
    }
    /**
     * If a product has low stock, return the remaining stock amount for display.
     *
     * @param \WC_Product $product Product instance.
     * @return integer|null
     */
    protected function get_low_stock_remaining(\WC_Product $product)
    {
    }
    /**
     * Returns true if the given attribute is valid.
     *
     * @param mixed $attribute Object or variable to check.
     * @return boolean
     */
    protected function filter_valid_attribute($attribute)
    {
    }
    /**
     * Returns true if the given attribute is valid and used for variations.
     *
     * @param mixed $attribute Object or variable to check.
     * @return boolean
     */
    protected function filter_variation_attribute($attribute)
    {
    }
    /**
     * Get variation IDs and attributes from the DB.
     *
     * @param \WC_Product $product Product instance.
     * @returns array
     */
    protected function get_variations(\WC_Product $product)
    {
    }
    /**
     * Get list of product attributes and attribute terms.
     *
     * @param \WC_Product $product Product instance.
     * @return array
     */
    protected function get_attributes(\WC_Product $product)
    {
    }
    /**
     * Prepare an attribute term for the response.
     *
     * @param \WP_Term $term Term object.
     * @return object
     */
    protected function prepare_product_attribute_taxonomy_value(\WP_Term $term)
    {
    }
    /**
     * Prepare an attribute term for the response.
     *
     * @param string $name Attribute term name.
     * @param int    $id Attribute term ID.
     * @param string $slug Attribute term slug.
     * @return object
     */
    protected function prepare_product_attribute_value($name, $id = 0, $slug = '')
    {
    }
    /**
     * Get an array of pricing data.
     *
     * @param \WC_Product $product Product instance.
     * @param string      $tax_display_mode If returned prices are incl or excl of tax.
     * @return array
     */
    protected function prepare_product_price_response(\WC_Product $product, $tax_display_mode = '')
    {
    }
    /**
     * WooCommerce can return prices including or excluding tax; choose the correct method based on tax display mode.
     *
     * @param string $tax_display_mode Provided tax display mode.
     * @return string Valid tax display mode.
     */
    protected function get_tax_display_mode($tax_display_mode = '')
    {
    }
    /**
     * WooCommerce can return prices including or excluding tax; choose the correct method based on tax display mode.
     *
     * @param string $tax_display_mode If returned prices are incl or excl of tax.
     * @return string Function name.
     */
    protected function get_price_function_from_tax_display_mode($tax_display_mode)
    {
    }
    /**
     * Get price range from certain product types.
     *
     * @param \WC_Product $product Product instance.
     * @param string      $tax_display_mode If returned prices are incl or excl of tax.
     * @return object|null
     */
    protected function get_price_range(\WC_Product $product, $tax_display_mode = '')
    {
    }
    /**
     * Returns a list of terms assigned to the product.
     *
     * @param \WC_Product $product Product object.
     * @param string      $taxonomy Taxonomy name.
     * @return array Array of terms (id, name, slug).
     */
    protected function get_term_list(\WC_Product $product, $taxonomy = '')
    {
    }
}