<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductQuery class.
 */
class ProductQuery extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-query';
    /**
     * The Block with its attributes before it gets rendered
     *
     * @var array
     */
    protected $parsed_block = null;
    /**
     * Orderby options not natively supported by WordPress REST API
     *
     * @var array
     */
    protected $custom_order_opts = array (
  0 => 'popularity',
  1 => 'rating',
);
    /**
     * All the query args related to the filter by attributes block.
     *
     * @var array
     */
    protected $attributes_filter_query_args = array();
    /** This is a feature flag to enable the custom inherit Global Query implementation.
     * This is not intended to be a permanent feature flag, but rather a temporary.
     * It is also necessary to enable this feature flag on the PHP side: `assets/js/blocks/product-query/utils.tsx:83`.
     * https://github.com/woocommerce/woocommerce-blocks/pull/7382
     *
     * @var boolean
     */
    protected $is_custom_inherit_global_query_implementation_enabled = false;
    /**
     * All query args from WP_Query.
     *
     * @var array
     */
    protected $valid_query_vars = null;
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     * - Hook into pre_render_block to update the query.
     */
    protected function initialize()
{
}
    /**
     * Post Template support for grid view was introduced in Gutenberg 16 / WordPress 6.3
     * Fixed in:
     * - https://github.com/woocommerce/woocommerce-blocks/pull/9916
     * - https://github.com/woocommerce/woocommerce-blocks/pull/10360
     */
    private function check_if_post_template_has_support_for_grid_view()
{
}
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = array())
{
}
    /**
     * Check if a given block
     *
     * @param array $parsed_block The block being rendered.
     * @return boolean
     */
    public static function is_woocommerce_variation($parsed_block)
{
}
    /**
     * Enqueues the variation styles when rendering the Product Query variation.
     *
     * @param string $block_content The block content.
     * @param array  $block         The full block, including name and attributes.
     *
     * @return string The block content.
     */
    public function enqueue_styles(string $block_content, array $block)
{
}
    /**
     * Update the query for the product query block.
     *
     * @param string|null $pre_render   The pre-rendered content. Default null.
     * @param array       $parsed_block The block being rendered.
     */
    public function update_query($pre_render, $parsed_block)
{
}
    /**
     * Merge tax_queries from various queries.
     *
     * @param array ...$queries Query arrays to be merged.
     * @return array
     */
    private function merge_tax_queries(...$queries)
{
}
    /**
     * Update the query for the product query block in Editor.
     *
     * @param array           $args    Query args.
     * @param WP_REST_Request $request Request.
     */
    public function update_rest_query($args, $request): array
{
}
    /**
     * Return a custom query based on attributes, filters and global WP_Query.
     *
     * @param WP_Query $query The WordPress Query.
     * @param WP_Block $block The block being rendered.
     * @return array
     */
    public function build_query($query, $block = null)
{
}
    /**
     * Merge in the first parameter the keys "post_in", "meta_query" and "tax_query" of the second parameter.
     *
     * @param array[] ...$queries Query arrays to be merged.
     * @return array
     */
    private function merge_queries(...$queries)
{
}
    /**
     * Extends allowed `collection_params` for the REST API
     *
     * By itself, the REST API doesn't accept custom `orderby` values,
     * even if they are supported by a custom post type.
     *
     * @param array $params  A list of allowed `orderby` values.
     *
     * @return array
     */
    public function extend_rest_query_allowed_params($params)
{
}
    /**
     * Return a query for on sale products.
     *
     * @return array
     */
    private function get_on_sale_products_query()
{
}
    /**
     * Return query params to support custom sort values
     *
     * @param string $orderby  Sort order option.
     *
     * @return array
     */
    private function get_custom_orderby_query($orderby)
{
}
    /**
     * Apply the query only to a subset of products
     *
     * @param array $query  The query.
     * @param array $ids  Array of selected product ids.
     *
     * @return array
     */
    private function filter_query_to_only_include_ids($query, $ids)
{
}
    /**
     * Return the `tax_query` for the requested attributes
     *
     * @param array $attributes  Attributes and their terms.
     *
     * @return array
     */
    private function get_product_attributes_query($attributes = array())
{
}
    /**
     * Return a query for products depending on their stock status.
     *
     * @param array $stock_statii An array of acceptable stock statii.
     * @return array
     */
    private function get_stock_status_query($stock_statii)
{
}
    /**
     * Return a query for product visibility depending on their stock status.
     *
     * @param array $stock_query Stock status query.
     *
     * @return array Tax query for product visibility.
     */
    private function get_product_visibility_query($stock_query)
{
}
    /**
     * Set the query vars that are used by filter blocks.
     *
     * @return array
     */
    private function get_query_vars_from_filter_blocks()
{
}
    /**
     * Set the query vars that are used by filter blocks.
     *
     * @param array $public_query_vars Public query vars.
     * @return array
     */
    public function set_query_vars($public_query_vars)
{
}
    /**
     * Get all the query args related to the filter by attributes block.
     *
     * @return array
     * [color] => Array
     *   (
     *        [filter] => filter_color
     *        [query_type] => query_type_color
     *    )
     *
     * [size] => Array
     *    (
     *        [filter] => filter_size
     *        [query_type] => query_type_size
     *    )
     * )
     */
    private function get_filter_by_attributes_query_vars()
{
}
    /**
     * Return queries that are generated by query args.
     *
     * @return array
     */
    private function get_queries_by_applied_filters()
{
}
    /**
     * Return queries that are generated by attributes
     *
     * @param array $parsed_block The Product Query that being rendered.
     * @return array
     */
    private function get_queries_by_custom_attributes($parsed_block)
{
}
    /**
     * Return a query that filters products by price.
     *
     * @return array
     */
    private function get_filter_by_price_query()
{
}
    /**
     * Return a query that filters products by attributes.
     *
     * @return array
     */
    private function get_filter_by_attributes_query()
{
}
    /**
     * Return a query that filters products by stock status.
     *
     * @return array
     */
    private function get_filter_by_stock_status_query()
{
}
    /**
     * Return or initialize $valid_query_vars.
     *
     * @return array
     */
    private function get_valid_query_vars()
{
}
    /**
     * Merge two array recursively but replace the non-array values instead of
     * merging them. The merging strategy:
     *
     * - If keys from merge array doesn't exist in the base array, create them.
     * - For array items with numeric keys, we merge them as normal.
     * - For array items with string keys:
     *
     *   - If the value isn't array, we'll use the value coming from the merge array.
     *     $base = ['orderby' => 'date']
     *     $new  = ['orderby' => 'meta_value_num']
     *     Result: ['orderby' => 'meta_value_num']
     *
     *   - If the value is array, we'll use recursion to merge each key.
     *     $base = ['meta_query' => [
     *       [
     *         'key'     => '_stock_status',
     *         'compare' => 'IN'
     *         'value'   =>  ['instock', 'onbackorder']
     *       ]
     *     ]]
     *     $new  = ['meta_query' => [
     *       [
     *         'relation' => 'AND',
     *         [...<max_price_query>],
     *         [...<min_price_query>],
     *       ]
     *     ]]
     *     Result: ['meta_query' => [
     *       [
     *         'key'     => '_stock_status',
     *         'compare' => 'IN'
     *         'value'   =>  ['instock', 'onbackorder']
     *       ],
     *       [
     *         'relation' => 'AND',
     *         [...<max_price_query>],
     *         [...<min_price_query>],
     *       ]
     *     ]]
     *
     *     $base = ['post__in' => [1, 2, 3, 4, 5]]
     *     $new  = ['post__in' => [3, 4, 5, 6, 7]]
     *     Result: ['post__in' => [1, 2, 3, 4, 5, 3, 4, 5, 6, 7]]
     *
     * @param array $base First array.
     * @param array $new  Second array.
     */
    private function array_merge_recursive_replace_non_array_properties($base, $new)
{
}
    /**
     * Get product-related query variables from the global query.
     *
     * @param array $parsed_block The Product Query that being rendered.
     *
     * @return array
     */
    private function get_global_query($parsed_block)
{
}
    /**
     * Return a query that filters products by rating.
     *
     * @return array
     */
    private function get_filter_by_rating_query()
{
}
    /**
     * Return a query to filter products by taxonomies (product categories, product tags, etc.)
     *
     * For example:
     * User could provide "Product Categories" using "Filters" ToolsPanel available in Inspector Controls.
     * We use this function to extract it's query from $tax_query.
     *
     * For example, this is how the query for product categories will look like in $tax_query array:
     * Array
     *    (
     *        [taxonomy] => product_cat
     *        [terms] => Array
     *            (
     *                [0] => 36
     *            )
     *    )
     *
     * For product categories, taxonomy would be "product_tag"
     *
     * @param array $query WP_Query.
     * @return array Query to filter products by taxonomies.
     */
    private function get_filter_by_taxonomies_query($query): array
{
}
    /**
     * Returns the keyword filter from the given query.
     *
     * @param WP_Query $query The query to extract the keyword filter from.
     * @return array The keyword filter, or an empty array if none is found.
     */
    private function get_filter_by_keyword_query($query): array
{
}
}