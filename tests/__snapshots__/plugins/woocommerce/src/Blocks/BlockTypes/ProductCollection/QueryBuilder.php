<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\ProductCollection;

/**
 * QueryBuilder class.
 * Responsible for constructing and modifying product queries.
 */
class QueryBuilder
{
    /**
     * All query args from WP_Query.
     *
     * @var array
     */
    protected $valid_query_vars = null;
    /**
     * Orderby options not natively supported by WordPress REST API
     *
     * @var array
     */
    protected $custom_order_opts = array (
  0 => 'popularity',
  1 => 'rating',
  2 => 'post__in',
  3 => 'price',
  4 => 'sales',
  5 => 'menu_order',
  6 => 'random',
);
    /**
     * All the query args related to the filter by attributes block.
     *
     * @var array
     */
    protected $attributes_filter_query_args = array();
    /**
     * Collection handler store.
     *
     * @var array
     */
    protected $collection_handler_store = array();
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Set the collection handler store.
     *
     * @param array $collection_handler_store The collection handler store containing registered collection handlers.
     */
    public function set_collection_handler_store($collection_handler_store)
{
}
    /**
     * Set collection handler.
     *
     * @param string $collection_name The name of the custom collection.
     * @param array  $handlers        Collection handlers.
     */
    public function set_collection_handler($collection_name, $handlers)
{
}
    /**
     * Set attributes filter query args.
     *
     * @param array $args The attributes filter query arguments.
     */
    public function set_attributes_filter_query_args($args)
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
     * Get custom order options.
     *
     * @return array
     */
    public function get_custom_order_opts()
{
}
    /**
     * Get the final query arguments for the frontend.
     *
     * @param array $collection_args            Any special arguments that should change the behavior of the query.
     * @param array $query                      The query arguments.
     * @param int   $page                       The page number.
     * @param bool  $is_exclude_applied_filters Whether to exclude the applied filters or not.
     */
    public function get_final_frontend_query($collection_args, $query, $page = 1, $is_exclude_applied_filters = false)
{
}
    /**
     * Return a query to filter products by taxonomies (product categories, product tags, etc.)
     *
     * For example:
     * User could provide "Product Categories" using "Filters" ToolsPanel available in Inspector Controls.
     * We use this function to extract its query from $tax_query.
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
     * For product tags, taxonomy would be "product_tag"
     *
     * @param array $tax_query Query to filter products by taxonomies.
     * @return array Query to filter products by taxonomies.
     */
    private function get_filter_by_taxonomies_query($tax_query): array
{
}
    /**
     * Get final query args based on provided values
     *
     * @param array $collection_args            Any special arguments that should change the behavior of the query.
     * @param array $common_query_values        Common query values.
     * @param array $query                      Query from block context.
     * @param bool  $is_exclude_applied_filters Whether to exclude the applied filters or not.
     */
    public function get_final_query_args($collection_args, $common_query_values, $query, $is_exclude_applied_filters = false)
{
}
    /**
     * Get query args for preview mode. These query args will be used with WP_Query to fetch the products.
     *
     * @param array           $collection_args Any collection-specific arguments.
     * @param array           $args            Query args.
     * @param WP_REST_Request $request         Request.
     */
    public function get_preview_query_args($collection_args, $args, $request)
{
}
    /**
     * Return a query for products depending on their stock status.
     *
     * @param array $stock_statuses An array of acceptable stock statuses.
     * @return array
     */
    private function get_stock_status_query($stock_statuses)
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
     * Generates a tax query to filter products based on their "featured" status.
     * If the `$featured` parameter is true, the function will return a tax query
     * that filters products to only those marked as featured.
     * If `$featured` is false, an empty array is returned, meaning no filtering will be applied.
     *
     * @param bool $featured A flag indicating whether to filter products based on featured status.
     *
     * @return array A tax query for fetching featured products if `$featured` is true; otherwise, an empty array.
     */
    private function get_featured_query($featured)
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
     * Return a query that filters products by stock status.
     *
     * @return array
     */
    private function get_filter_by_stock_status_query()
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
     * Merge two array recursively but replace the non-array values instead of
     * merging them. The merging strategy:
     *
     * - If keys from merge array doesn't exist in the base array, create them.
     * - For array items with numeric keys, we merge them as normal.
     * - For array items with string keys:
     *
     *   - If the value isn't array, we'll use the value coming from the merge array.
     *     $base       = ['orderby' => 'date']
     *     $new_array  = ['orderby' => 'meta_value_num']
     *     Result: ['orderby' => 'meta_value_num']
     *
     *   - If the value is array, we'll use recursion to merge each key.
     *     $base       = ['meta_query' => [
     *       [
     *         'key'     => '_stock_status',
     *         'compare' => 'IN'
     *         'value'   =>  ['instock', 'onbackorder']
     *       ]
     *     ]]
     *     $new_array  = ['meta_query' => [
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
     *     $base       = ['post__in' => [1, 2, 3, 4, 5]]
     *     $new_array  = ['post__in' => [3, 4, 5, 6, 7]]
     *     Result: ['post__in' => [1, 2, 3, 4, 5, 3, 4, 5, 6, 7]]
     *
     * @param array $base First array.
     * @param array $new_array  Second array.
     */
    private function array_merge_recursive_replace_non_array_properties($base, $new_array)
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
     * Return a query for product visibility depending on their stock status.
     *
     * @param array $stock_query  Stock status query.
     * @param array $stock_status Selected stock status.
     *
     * @return array Tax query for product visibility.
     */
    private function get_product_visibility_query($stock_query, $stock_status)
{
}
    /**
     * Constructs a date query for product filtering based on a specified time frame.
     *
     * @param array $time_frame {
     *     Associative array with 'operator' (in or not-in) and 'value' (date string).
     *
     *     @type string $operator Determines the inclusion or exclusion of the date range.
     *     @type string $value    The date around which the range is applied.
     * }
     * @return array Date query array; empty if parameters are invalid.
     */
    private function get_date_query(array $time_frame): array
{
}
    /**
     * Get query arguments for price range filter.
     * We are adding these extra query arguments to be used in `posts_clauses`
     * because there are 2 special edge cases we wanna handle for Price range filter:
     * Case 1: Prices excluding tax are displayed including tax
     * Case 2: Prices including tax are displayed excluding tax
     *
     * Both of these cases require us to modify SQL query to get the correct results.
     *
     * See add_price_range_filter_posts_clauses function in this file for more details.
     *
     * @param array $price_range Price range with min and max values.
     * @return array Query arguments.
     */
    public function get_price_range_query_args($price_range)
{
}
    /**
     * Add the `posts_clauses` filter to the main query.
     *
     * @param array    $clauses The query clauses.
     * @param WP_Query $query   The WP_Query instance.
     */
    public function add_price_range_filter_posts_clauses($clauses, $query)
{
}
    /**
     * Get query for price filters when dealing with displayed taxes.
     *
     * @param float  $price_filter Price filter to apply.
     * @param string $column Price being filtered (min or max).
     * @param string $operator Comparison operator for column.
     * @return string Constructed query.
     */
    protected function get_price_filter_query_for_displayed_taxes($price_filter, $column = 'min_price', $operator = '>=')
{
}
    /**
     * Adjusts a price filter based on a tax class and whether or not the amount includes or excludes taxes.
     *
     * This calculation logic is based on `wc_get_price_excluding_tax` and `wc_get_price_including_tax` in core.
     *
     * @param float  $price_filter Price filter amount as entered.
     * @param string $tax_class Tax class for adjustment.
     * @return float
     */
    protected function adjust_price_filter_for_tax_class($price_filter, $tax_class)
{
}
    /**
     * Determines if price filters need adjustment based on the tax display settings.
     *
     * This function checks if there's a discrepancy between how prices are stored in the database
     * and how they are displayed to the user, specifically with respect to tax inclusion or exclusion.
     * It returns true if an adjustment is needed, indicating that the price filters should account for this
     * discrepancy to display accurate prices.
     *
     * @return bool True if the price filters need to be adjusted for tax display settings, false otherwise.
     */
    private function should_adjust_price_range_for_taxes()
{
}
    /**
     * Generates a post__in query to filter products to the set of provided IDs.
     *
     * @param int[]|false $handpicked_products The products to filter.
     *
     * @return array The post__in query.
     */
    private function get_handpicked_query($handpicked_products)
{
}
    /**
     * Return a query for on sale products.
     *
     * @param bool $is_on_sale Whether to query for on sale products.
     *
     * @return array
     */
    private function get_on_sale_products_query($is_on_sale)
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
     * Add the `posts_clauses` filter to add price-based sorting
     *
     * @param array    $clauses The list of clauses for the query.
     * @param WP_Query $query   The WP_Query instance.
     * @return array   Modified list of clauses.
     */
    public function add_price_sorting_posts_clauses($clauses, $query)
{
}
    /**
     * Add the `posts_clauses` filter to add sales-based sorting
     *
     * @param array    $clauses The list of clauses for the query.
     * @param WP_Query $query   The WP_Query instance.
     * @return array   Modified list of clauses.
     */
    public function add_sales_sorting_posts_clauses($clauses, $query)
{
}
    /**
     * Join wc_product_meta_lookup to posts if not already joined.
     *
     * @param string $sql SQL join.
     * @return string
     */
    protected function append_product_sorting_table_join($sql)
{
}
    /**
     * Merge all of the 'post__in' values and return an array containing only values that are present in all arrays.
     *
     * @param int[][] ...$post__in The 'post__in' values to be merged.
     *
     * @return int[] The merged 'post__in' values.
     */
    private function merge_post__in(...$post__in)
{
}
}