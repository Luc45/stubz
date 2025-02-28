<?php
/**
 * WC Variation Product Data Store: Stored in CPT.
 *
 * @version  3.0.0
 */
class WC_Product_Variation_Data_Store_CPT extends \WC_Product_Data_Store_CPT implements \WC_Object_Data_Store_Interface
{
    /**
     * Callback to remove unwanted meta data.
     *
     * @param object $meta Meta object.
     * @return bool false if excluded.
     */
    protected function exclude_internal_meta_keys($meta)
{
}
    /**
     * Reads a product from the database and sets its data to the class.
     *
     * @since 3.0.0
     * @param WC_Product_Variation $product Product object.
     * @throws WC_Data_Exception If WC_Product::set_tax_status() is called with an invalid tax status (via read_product_data), or when passing an invalid ID.
     */
    public function read(&$product)
{
}
    /**
     * Create a new product.
     *
     * @since 3.0.0
     * @param WC_Product_Variation $product Product object.
     */
    public function create(&$product)
{
}
    /**
     * Updates an existing product.
     *
     * @since 3.0.0
     * @param WC_Product_Variation $product Product object.
     */
    public function update(&$product)
{
}
    /**
     * Generates a title with attribute information for a variation.
     * Products will get a title of the form "Name - Value, Value" or just "Name".
     *
     * @since 3.0.0
     * @param WC_Product $product Product object.
     * @return string
     */
    protected function generate_product_title($product)
{
}
    /**
     * Generates attribute summary for the variation.
     *
     * Attribute summary contains comma-delimited 'attribute_name: attribute_value' pairs for all attributes.
     *
     * @since 3.6.0
     * @param WC_Product_Variation $product Product variation to generate the attribute summary for.
     *
     * @return string
     */
    protected function generate_attribute_summary($product)
{
}
    /**
     * Make sure we store the product version (to track data changes).
     *
     * @param WC_Product $product Product object.
     * @since 3.0.0
     */
    protected function update_version_and_type(&$product)
{
}
    /**
     * Read post data.
     *
     * @since 3.0.0
     * @param WC_Product_Variation $product Product object.
     * @throws WC_Data_Exception If WC_Product::set_tax_status() is called with an invalid tax status.
     */
    protected function read_product_data(&$product)
{
}
    /**
     * Load the Cost of Goods Sold related data for a given product.
     *
     * @param WC_Product $product The product to apply the loaded data to.
     */
    protected function load_cogs_data($product)
{
}
    /**
     * For all stored terms in all taxonomies, save them to the DB.
     *
     * @since 3.0.0
     * @param WC_Product $product Product object.
     * @param bool       $force Force update. Used during create.
     */
    protected function update_terms(&$product, $force = false)
{
}
    /**
     * Update visibility terms based on props.
     *
     * @since 3.0.0
     *
     * @param WC_Product $product Product object.
     * @param bool       $force Force update. Used during create.
     */
    protected function update_visibility(&$product, $force = false)
{
}
    /**
     * Update attribute meta values.
     *
     * @since 3.0.0
     * @param WC_Product $product Product object.
     * @param bool       $force Force update. Used during create.
     */
    protected function update_attributes(&$product, $force = false)
{
}
    /**
     * Helper method that updates all the post meta for a product based on its settings in the WC_Product class.
     *
     * @since 3.0.0
     * @param WC_Product $product Product object.
     * @param bool       $force Force update. Used during create.
     */
    public function update_post_meta(&$product, $force = false)
{
}
    /**
     * Update product variation guid.
     *
     * @param WC_Product_Variation $product Product variation object.
     *
     * @since 3.6.0
     */
    protected function update_guid($product)
{
}
}
