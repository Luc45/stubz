<?php

/**
 * WC Variable Product Data Store: Stored in CPT.
 *
 * @version 3.0.0
 */
class WC_Product_Variable_Data_Store_CPT extends \WC_Product_Data_Store_CPT
{
    /**
     * Cached & hashed prices array for child variations.
     *
     * @var array
     */
    protected $prices_array = array();

    /**
     * Read attributes from post meta.
     *
     * @param WC_Product $product Product object.
     */
    protected function read_attributes(&$product)
{
}
    /**
     * Read product data.
     *
     * @param WC_Product $product Product object.
     *
     * @since 3.0.0
     */
    protected function read_product_data(&$product)
{
}
    /**
     * Loads variation child IDs.
     *
     * @param WC_Product $product Product object.
     * @param bool       $force_read True to bypass the transient.
     *
     * @return array
     */
    public function read_children(&$product, $force_read = false)
{
}
    /**
     * Loads an array of attributes used for variations, as well as their possible values.
     *
     * @param WC_Product $product Product object.
     *
     * @return array
     */
    public function read_variation_attributes(&$product)
{
}
    /**
     * Get an array of all sale and regular prices from all variations. This is used for example when displaying the price range at variable product level or seeing if the variable product is on sale.
     *
     * Can be filtered by plugins which modify costs, but otherwise will include the raw meta costs unlike get_price() which runs costs through the woocommerce_get_price filter.
     * This is to ensure modified prices are not cached, unless intended.
     *
     * @param WC_Product $product Product object.
     * @param bool       $for_display If true, prices will be adapted for display based on the `woocommerce_tax_display_shop` setting (including or excluding taxes).
     *
     * @return array of prices
     * @since  3.0.0
     */
    public function read_price_data(&$product, $for_display = false)
{
}
    /**
     * Create unique cache key based on the tax location (affects displayed/cached prices), product version and active price filters.
     * DEVELOPERS should filter this hash if offering conditional pricing to keep it unique.
     *
     * @param WC_Product $product Product object.
     * @param bool       $for_display If taxes should be calculated or not.
     *
     * @since  3.0.0
     * @return string
     */
    protected function get_price_hash(&$product, $for_display = false)
{
}
    /**
     * Does a child have a weight set?
     *
     * @param WC_Product $product Product object.
     *
     * @since  3.0.0
     * @return boolean
     */
    public function child_has_weight($product)
{
}
    /**
     * Does a child have dimensions set?
     *
     * @param WC_Product $product Product object.
     *
     * @since  3.0.0
     * @return boolean
     */
    public function child_has_dimensions($product)
{
}
    /**
     * Is a child in stock?
     *
     * @param WC_Product $product Product object.
     *
     * @since  3.0.0
     * @return boolean
     */
    public function child_is_in_stock($product)
{
}
    /**
     * Does a child have a stock status?
     *
     * @param WC_Product $product Product object.
     * @param string     $status 'instock', 'outofstock', or 'onbackorder'.
     *
     * @since  3.3.0
     * @return boolean
     */
    public function child_has_stock_status($product, $status)
{
}
    /**
     * Syncs all variation names if the parent name is changed.
     *
     * @param WC_Product $product Product object.
     * @param string     $previous_name Variation previous name.
     * @param string     $new_name Variation new name.
     *
     * @since 3.0.0
     */
    public function sync_variation_names(&$product, $previous_name = '', $new_name = '')
{
}
    /**
     * Stock managed at the parent level - update children being managed by this product.
     * This sync function syncs downwards (from parent to child) when the variable product is saved.
     *
     * @param WC_Product $product Product object.
     *
     * @since 3.0.0
     */
    public function sync_managed_variation_stock_status(&$product)
{
}
    /**
     * Sync variable product prices with children.
     *
     * @param WC_Product $product Product object.
     *
     * @since 3.0.0
     */
    public function sync_price(&$product)
{
}
    /**
     * Sync variable product stock status with children.
     * Change does not persist unless saved by caller.
     *
     * @param WC_Product $product Product object.
     *
     * @since 3.0.0
     */
    public function sync_stock_status(&$product)
{
}
    /**
     * Delete variations of a product.
     *
     * @param int  $product_id Product ID.
     * @param bool $force_delete False to trash.
     *
     * @since 3.0.0
     */
    public function delete_variations($product_id, $force_delete = false)
{
}
    /**
     * Untrash variations.
     *
     * @param int $product_id Product ID.
     */
    public function untrash_variations($product_id)
{
}
    /**
     * Validate the children data by checking the structure and type of the data.
     *
     * @param array  $children The children data.
     * @param string $current_version The current transient version.
     * @return bool True if valid, false otherwise.
     */
    protected function validate_children_data($children, $current_version)
{
}
    /**
     * Validate the prices data by checking the structure and type of the data.
     *
     * @param  array  $prices_array The prices data.
     * @param  string $current_version The current version of the data.
     * @return bool True if valid, false otherwise.
     */
    protected function validate_prices_data($prices_array, $current_version)
{
}
}
