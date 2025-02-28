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
    protected $valid_query_vars;
    /**
     * Orderby options not natively supported by WordPress REST API
     *
     * @var array
     */
    protected $custom_order_opts = array(
'popularity',
'rating',
'post__in',
'price',
'sales',
'menu_order',
'random'
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
}