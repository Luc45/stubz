<?php
/**
 * WC Product Data Store: Stored in CPT.
 *
 * @version  3.0.0
 */
class WC_Product_Data_Store_CPT extends \WC_Data_Store_WP implements \WC_Object_Data_Store_Interface, \WC_Product_Data_Store_Interface
{
    /**
     * Data stored in meta keys, but not considered "meta".
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array (
  0 => '_visibility',
  1 => '_sku',
  2 => '_global_unique_id',
  3 => '_price',
  4 => '_regular_price',
  5 => '_sale_price',
  6 => '_sale_price_dates_from',
  7 => '_sale_price_dates_to',
  8 => 'total_sales',
  9 => '_tax_status',
  10 => '_tax_class',
  11 => '_manage_stock',
  12 => '_stock',
  13 => '_stock_status',
  14 => '_backorders',
  15 => '_low_stock_amount',
  16 => '_sold_individually',
  17 => '_weight',
  18 => '_length',
  19 => '_width',
  20 => '_height',
  21 => '_upsell_ids',
  22 => '_crosssell_ids',
  23 => '_purchase_note',
  24 => '_default_attributes',
  25 => '_product_attributes',
  26 => '_virtual',
  27 => '_downloadable',
  28 => '_download_limit',
  29 => '_download_expiry',
  30 => '_featured',
  31 => '_downloadable_files',
  32 => '_wc_rating_count',
  33 => '_wc_average_rating',
  34 => '_wc_review_count',
  35 => '_variation_description',
  36 => '_thumbnail_id',
  37 => '_file_paths',
  38 => '_product_image_gallery',
  39 => '_product_version',
  40 => '_wp_old_slug',
  41 => '_edit_last',
  42 => '_edit_lock',
  43 => '_cogs_total_value',
);
    /**
     * Meta data which should exist in the DB, even if empty.
     *
     * @since 3.6.0
     *
     * @var array
     */
    protected $must_exist_meta_keys = array (
  0 => '_tax_class',
);
    /**
     * If we have already saved our extra data, don't do automatic / default handling.
     *
     * @var bool
     */
    protected $extra_data_saved = false;
    /**
     * Stores updated props.
     *
     * @var array
     */
    protected $updated_props = array();
    /**
     * Method to create a new product in the database.
     *
     * @param WC_Product $product Product object.
     * @throws Exception If SKU is already under processing.
     */
    public function create(&$product)
{
}
    /**
     * Method to read a product from the database.
     *
     * @param WC_Product $product Product object.
     * @throws Exception If invalid product.
     */
    public function read(&$product)
{
}
    /**
     * Method to update a product in the database.
     *
     * @param WC_Product $product Product object.
     */
    public function update(&$product)
{
}
    /**
     * Method to delete a product from the database.
     *
     * @param WC_Product $product Product object.
     * @param array      $args Array of args to pass to the delete method.
     */
    public function delete(&$product, $args = array())
{
}
    /**
     * Read product data. Can be overridden by child classes to load other props.
     *
     * @param WC_Product $product Product object.
     * @since 3.0.0
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
     * Re-reads stock from the DB ignoring changes.
     *
     * @param WC_Product $product Product object.
     * @param int|float  $new_stock New stock level if already read.
     */
    public function read_stock_quantity(&$product, $new_stock = null)
{
}
    /**
     * Read extra data associated with the product, like button text or product URL for external products.
     *
     * @param WC_Product $product Product object.
     * @since 3.0.0
     */
    protected function read_extra_data(&$product)
{
}
    /**
     * Convert visibility terms to props.
     * Catalog visibility valid values are 'visible', 'catalog', 'search', and 'hidden'.
     *
     * @param WC_Product $product Product object.
     * @since 3.0.0
     */
    protected function read_visibility(&$product)
{
}
    /**
     * Read attributes from post meta.
     *
     * @param WC_Product $product Product object.
     */
    protected function read_attributes(&$product)
{
}
    /**
     * Read downloads from post meta.
     *
     * @param WC_Product $product Product object.
     * @since 3.0.0
     */
    protected function read_downloads(&$product)
{
}
    /**
     * Helper method that updates all the post meta for a product based on it's settings in the WC_Product class.
     *
     * @param WC_Product $product Product object.
     * @param bool       $force Force update. Used during create.
     * @since 3.0.0
     */
    protected function update_post_meta(&$product, $force = false)
{
}
    /**
     * Handle updated meta props after updating meta data.
     *
     * @since 3.0.0
     * @param WC_Product $product Product Object.
     */
    protected function handle_updated_props(&$product)
{
}
    /**
     * For all stored terms in all taxonomies, save them to the DB.
     *
     * @param WC_Product $product Product object.
     * @param bool       $force Force update. Used during create.
     * @since 3.0.0
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
     * Update attributes which are a mix of terms and meta data.
     *
     * @param WC_Product $product Product object.
     * @param bool       $force Force update. Used during create.
     * @since 3.0.0
     */
    protected function update_attributes(&$product, $force = false)
{
}
    /**
     * Update downloads.
     *
     * @since 3.0.0
     * @param WC_Product $product Product object.
     * @param bool       $force Force update. Used during create.
     * @return bool If updated or not.
     */
    protected function update_downloads(&$product, $force = false)
{
}
    /**
     * Make sure we store the product type and version (to track data changes).
     *
     * @param WC_Product $product Product object.
     * @since 3.0.0
     */
    protected function update_version_and_type(&$product)
{
}
    /**
     * Clear any caches.
     *
     * @param WC_Product $product Product object.
     * @since 3.0.0
     */
    protected function clear_caches(&$product)
{
}
    /**
     * Returns an array of on sale products, as an array of objects with an
     * ID and parent_id present. Example: $return[0]->id, $return[0]->parent_id.
     *
     * @return array
     * @since 3.0.0
     */
    public function get_on_sale_products()
{
}
    /**
     * Returns a list of product IDs ( id as key => parent as value) that are
     * featured. Uses get_posts instead of wc_get_products since we want
     * some extra meta queries and ALL products (posts_per_page = -1).
     *
     * @return array
     * @since 3.0.0
     */
    public function get_featured_product_ids()
{
}
    /**
     * Check if product sku is found for any other product IDs.
     *
     * @since 3.0.0
     * @param int    $product_id Product ID.
     * @param string $sku Will be slashed to work around https://core.trac.wordpress.org/ticket/27421.
     * @return bool
     */
    public function is_existing_sku($product_id, $sku)
{
}
    /**
     * Check if product sku is found for any other product IDs.
     *
     * @since 9.1.0
     * @param int    $product_id Product ID.
     * @param string $global_unique_id Will be slashed to work around https://core.trac.wordpress.org/ticket/27421.
     * @return bool
     */
    public function is_existing_global_unique_id($product_id, $global_unique_id)
{
}
    /**
     * Return product ID based on SKU.
     *
     * @since 3.0.0
     * @param string $sku Product SKU.
     * @return int
     */
    public function get_product_id_by_sku($sku)
{
}
    /**
     * Return product ID based on Unique ID.
     *
     * @since 9.1.0
     * @param string $global_unique_id Product Unique ID.
     * @return int
     */
    public function get_product_id_by_global_unique_id($global_unique_id)
{
}
    /**
     * Returns an array of IDs of products that have sales starting soon.
     *
     * @since 3.0.0
     * @return array
     */
    public function get_starting_sales()
{
}
    /**
     * Returns an array of IDs of products that have sales which are due to end.
     *
     * @since 3.0.0
     * @return array
     */
    public function get_ending_sales()
{
}
    /**
     * Find a matching (enabled) variation within a variable product.
     *
     * @since  3.0.0
     * @param  WC_Product $product Variable product.
     * @param  array      $match_attributes Array of attributes we want to try to match.
     * @return int Matching variation ID or 0.
     */
    public function find_matching_product_variation($product, $match_attributes = array())
{
}
    /**
     * Creates all possible combinations of variations from the attributes, without creating duplicates.
     *
     * @since  3.6.0
     * @todo   Add to interface in 4.0.
     * @param  WC_Product $product Variable product.
     * @param  int        $limit Limit the number of created variations.
     * @param  array      $default_values Key value pairs to set on created variations.
     * @param  array      $metadata Key value pairs to set as meta data on created variations.
     * @return int        Number of created variations.
     */
    public function create_all_product_variations($product, $limit = -1, $default_values = array(), $metadata = array())
{
}
    /**
     * Make sure all variations have a sort order set so they can be reordered correctly.
     *
     * @param int $parent_id Product ID.
     */
    public function sort_all_product_variations($parent_id)
{
}
    /**
     * Return a list of related products (using data like categories and IDs).
     *
     * @since 3.0.0
     * @param array $cats_array  List of categories IDs.
     * @param array $tags_array  List of tags IDs.
     * @param array $exclude_ids Excluded IDs.
     * @param int   $limit       Limit of results.
     * @param int   $product_id  Product ID.
     * @return array
     */
    public function get_related_products($cats_array, $tags_array, $exclude_ids, $limit, $product_id)
{
}
    /**
     * Builds the related posts query.
     *
     * @since 3.0.0
     *
     * @param array $cats_array  List of categories IDs.
     * @param array $tags_array  List of tags IDs.
     * @param array $exclude_ids Excluded IDs.
     * @param int   $limit       Limit of results.
     *
     * @return array
     */
    public function get_related_products_query($cats_array, $tags_array, $exclude_ids, $limit)
{
}
    /**
     * Update a product's stock amount directly in the database.
     *
     * Updates both post meta and lookup tables. Ignores manage stock setting on the product.
     *
     * @param int            $product_id_with_stock Product ID.
     * @param int|float|null $stock_quantity        Stock quantity.
     */
    protected function set_product_stock($product_id_with_stock, $stock_quantity)
{
}
    /**
     * Update a product's stock amount directly.
     *
     * Uses queries rather than update_post_meta so we can do this in one query (to avoid stock issues).
     * Ignores manage stock setting on the product and sets quantities directly in the db: post meta and lookup tables.
     * Uses locking to update the quantity. If the lock is not acquired, change is lost.
     *
     * @since  3.0.0 this supports set, increase and decrease.
     * @param  int            $product_id_with_stock Product ID.
     * @param  int|float|null $stock_quantity Stock quantity.
     * @param  string         $operation Set, increase and decrease.
     * @return int|float New stock level.
     */
    public function update_product_stock($product_id_with_stock, $stock_quantity = null, $operation = 'set')
{
}
    /**
     * Update a product's sale count directly.
     *
     * Uses queries rather than update_post_meta so we can do this in one query for performance.
     *
     * @since  3.0.0 this supports set, increase and decrease.
     * @param  int      $product_id Product ID.
     * @param  int|null $quantity Quantity.
     * @param  string   $operation set, increase and decrease.
     */
    public function update_product_sales($product_id, $quantity = null, $operation = 'set')
{
}
    /**
     * Update a products average rating meta.
     *
     * @since 3.0.0
     * @todo Deprecate unused function?
     * @param WC_Product $product Product object.
     */
    public function update_average_rating($product)
{
}
    /**
     * Update a products review count meta.
     *
     * @since 3.0.0
     * @todo Deprecate unused function?
     * @param WC_Product $product Product object.
     */
    public function update_review_count($product)
{
}
    /**
     * Update a products rating counts.
     *
     * @since 3.0.0
     * @todo Deprecate unused function?
     * @param WC_Product $product Product object.
     */
    public function update_rating_counts($product)
{
}
    /**
     * Get shipping class ID by slug.
     *
     * @since 3.0.0
     * @param string $slug Product shipping class slug.
     * @return int|false
     */
    public function get_shipping_class_id_by_slug($slug)
{
}
    /**
     * Returns an array of products.
     *
     * @param  array $args Args to pass to WC_Product_Query().
     * @return array|object
     * @see wc_get_products
     */
    public function get_products($args = array())
{
}
    /**
     * Search product data for a term and return ids.
     *
     * @param  string     $term Search term.
     * @param  string     $type Type of product.
     * @param  bool       $include_variations Include variations in search or not.
     * @param  bool       $all_statuses Should we search all statuses or limit to published.
     * @param  null|int   $limit Limit returned results. @since 3.5.0.
     * @param  null|array $include Keep specific results. @since 3.6.0.
     * @param  null|array $exclude Discard specific results. @since 3.6.0.
     * @return array of ids
     */
    public function search_products($term, $type = '', $include_variations = false, $all_statuses = false, $limit = null, $include = null, $exclude = null)
{
}
    /**
     * Get the product type based on product ID.
     *
     * @since 3.0.0
     * @param int $product_id Product ID.
     * @return bool|string
     */
    public function get_product_type($product_id)
{
}
    /**
     * Add ability to get products by 'reviews_allowed' in WC_Product_Query.
     *
     * @since 3.2.0
     * @param string   $where Where clause.
     * @param WP_Query $wp_query WP_Query instance.
     * @return string
     */
    public function reviews_allowed_query_where($where, $wp_query)
{
}
    /**
     * Get valid WP_Query args from a WC_Product_Query's query variables.
     *
     * @since 3.2.0
     * @param array $query_vars Query vars from a WC_Product_Query.
     * @return array
     */
    protected function get_wp_query_args($query_vars)
{
}
    /**
     * Query for Products matching specific criteria.
     *
     * @since 3.2.0
     *
     * @param array $query_vars Query vars from a WC_Product_Query.
     *
     * @return array|object
     */
    public function query($query_vars)
{
}
    /**
     * Get data to save to a lookup table.
     *
     * @since 3.6.0
     * @param int    $id ID of object to update.
     * @param string $table Lookup table name.
     * @return array
     */
    protected function get_data_for_lookup_table($id, $table)
{
}
    /**
     * Get primary key name for lookup table.
     *
     * @since 3.6.0
     * @param string $table Lookup table name.
     * @return string
     */
    protected function get_primary_key_for_lookup_table($table)
{
}
    /**
     * Returns query statement for getting current `_stock` of a product.
     *
     * @internal MAX function below is used to make sure result is a scalar.
     * @param int $product_id Product ID.
     * @return string|void Query statement.
     */
    public function get_query_for_stock($product_id)
{
}
    /**
     * Check if the Cost of Goods Sold feature is enabled.
     *
     * @return bool True if the feature is enabled.
     */
    protected function cogs_feature_is_enabled(): bool
{
}
}
