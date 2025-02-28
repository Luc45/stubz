<?php
/**
 * WC_Query Class.
 */
class WC_Query
{
    /**
     * Query vars to add to wp.
     *
     * @var array
     */
    public $query_vars = array();
    /**
     * Reference to the main product query on the page.
     *
     * @var WP_Query
     */
    private static $product_query = null;
    /**
     * Stores chosen attributes.
     *
     * @var array
     */
    private static $chosen_attributes = null;
    /**
     * The instance of the class that helps filtering with the product attributes lookup table.
     *
     * @var Filterer
     */
    private $filterer = null;
    /**
     * Constructor for the query class. Hooks in methods.
     */
    public function __construct()
{
}
    /**
     * Reset the chosen attributes so that get_layered_nav_chosen_attributes will get them from the query again.
     */
    public static function reset_chosen_attributes()
{
}
    /**
     * Get any errors from querystring.
     */
    public function get_errors()
{
}
    /**
     * Init query vars by loading options.
     */
    public function init_query_vars()
{
}
    /**
     * Get page title for an endpoint.
     *
     * @param string $endpoint Endpoint key.
     * @param string $action Optional action or variation within the endpoint.
     *
     * @since 2.3.0
     * @since 4.6.0 Added $action parameter.
     * @return string The page title.
     */
    public function get_endpoint_title($endpoint, $action = '')
{
}
    /**
     * Endpoint mask describing the places the endpoint should be added.
     *
     * @since 2.6.2
     * @return int
     */
    public function get_endpoints_mask()
{
}
    /**
     * Add endpoints for query vars.
     */
    public function add_endpoints()
{
}
    /**
     * Add query vars.
     *
     * @param array $vars Query vars.
     * @return array
     */
    public function add_query_vars($vars)
{
}
    /**
     * Get query vars.
     *
     * @return array
     */
    public function get_query_vars()
{
}
    /**
     * Get query current active query var.
     *
     * @return string
     */
    public function get_current_endpoint()
{
}
    /**
     * Parse the request and look for query vars - endpoints may not be supported.
     */
    public function parse_request()
{
}
    /**
     * Are we currently on the front page?
     *
     * @param WP_Query $q Query instance.
     * @return bool
     */
    private function is_showing_page_on_front($q)
{
}
    /**
     * Is the front page a page we define?
     *
     * @param int $page_id Page ID.
     * @return bool
     */
    private function page_on_front_is($page_id)
{
}
    /**
     * Returns a copy of `$query` with all query vars that are allowed on the front page stripped.
     * Used when the shop page is also the front page.
     *
     * @param array $query The unfiltered array.
     * @return array The filtered query vars.
     */
    private function filter_out_valid_front_page_query_vars($query)
{
}
    /**
     * Checks whether a query var is allowed on the front page or not.
     *
     * @param string $query_var Query var name.
     * @return boolean TRUE when query var is allowed on the front page. FALSE otherwise.
     */
    private function is_query_var_valid_on_front_page($query_var)
{
}
    /**
     * Hook into pre_get_posts to do the main product query.
     *
     * @param WP_Query $q Query instance.
     */
    public function pre_get_posts($q)
{
}
    /**
     * Handler for the 'the_posts' WP filter.
     *
     * @param array    $posts Posts from WP Query.
     * @param WP_Query $query Current query.
     *
     * @return array
     */
    public function handle_get_posts($posts, $query)
{
}
    /**
     * Pre_get_posts above may adjust the main query to add WooCommerce logic. When this query is done, we need to ensure
     * all custom filters are removed.
     *
     * This is done here during the_posts filter. The input is not changed.
     *
     * @param array $posts Posts from WP Query.
     * @return array
     */
    public function remove_product_query_filters($posts)
{
}
    /**
     * This function used to be hooked to found_posts and adjust the posts count when the filtering by attribute
     * widget was used and variable products were present. Now it isn't hooked anymore and does nothing but return
     * the input unchanged, since the pull request in which it was introduced has been reverted.
     *
     * @since 4.4.0
     * @param int      $count Original posts count, as supplied by the found_posts filter.
     * @param WP_Query $query The current WP_Query object.
     *
     * @return int Adjusted posts count.
     */
    public function adjust_posts_count($count, $query)
{
}
    /**
     * Instance version of get_layered_nav_chosen_attributes, needed for unit tests.
     *
     * @return array
     */
    protected function get_layered_nav_chosen_attributes_inst()
{
}
    /**
     * Get the posts (or the ids of the posts) found in the current WP loop.
     *
     * @return array Array of posts or post ids.
     */
    protected function get_current_posts()
{
}
    /**
     * WP SEO meta description.
     *
     * Hooked into wpseo_ hook already, so no need for function_exist.
     *
     * @return string
     */
    public function wpseo_metadesc()
{
}
    /**
     * WP SEO meta key.
     *
     * Hooked into wpseo_ hook already, so no need for function_exist.
     *
     * @return string
     */
    public function wpseo_metakey()
{
}
    /**
     * Query the products, applying sorting/ordering etc.
     * This applies to the main WordPress loop.
     *
     * @param WP_Query $q Query instance.
     */
    public function product_query($q)
{
}
    /**
     * Add extra clauses to the product query.
     *
     * @param array    $args Product query clauses.
     * @param WP_Query $wp_query The current product query.
     * @return array The updated product query clauses array.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function product_query_post_clauses($args, $wp_query)
{
}
    /**
     * Remove the query.
     */
    public function remove_product_query()
{
}
    /**
     * Remove ordering queries.
     */
    public function remove_ordering_args()
{
}
    /**
     * Returns an array of arguments for ordering products based on the selected values.
     *
     * @param string $orderby Order by param.
     * @param string $order Order param.
     * @return array
     */
    public function get_catalog_ordering_args($orderby = '', $order = '')
{
}
    /**
     * Custom query used to filter products by price.
     *
     * @since 3.6.0
     *
     * @param array    $args Query args.
     * @param WP_Query $wp_query WP_Query object.
     *
     * @return array
     */
    public function price_filter_post_clauses($args, $wp_query)
{
}
    /**
     * Handle numeric price sorting.
     *
     * @param array $args Query args.
     * @return array
     */
    public function order_by_price_asc_post_clauses($args)
{
}
    /**
     * Handle numeric price sorting.
     *
     * @param array $args Query args.
     * @return array
     */
    public function order_by_price_desc_post_clauses($args)
{
}
    /**
     * WP Core does not let us change the sort direction for individual orderby params - https://core.trac.wordpress.org/ticket/17065.
     *
     * This lets us sort by meta value desc, and have a second orderby param.
     *
     * @param array $args Query args.
     * @return array
     */
    public function order_by_popularity_post_clauses($args)
{
}
    /**
     * Order by rating post clauses.
     *
     * @param array $args Query args.
     * @return array
     */
    public function order_by_rating_post_clauses($args)
{
}
    /**
     * Join wc_product_meta_lookup to posts if not already joined.
     *
     * @param string $sql SQL join.
     * @return string
     */
    private function append_product_sorting_table_join($sql)
{
}
    /**
     * Appends meta queries to an array.
     *
     * @param  array $meta_query Meta query.
     * @param  bool  $main_query If is main query.
     * @return array
     */
    public function get_meta_query($meta_query = array(), $main_query = false)
{
}
    /**
     * Appends tax queries to an array.
     *
     * @param  array $tax_query  Tax query.
     * @param  bool  $main_query If is main query.
     * @return array
     */
    public function get_tax_query($tax_query = array(), $main_query = false)
{
}
    /**
     * Get the main query which product queries ran against.
     *
     * @return WP_Query
     */
    public static function get_main_query()
{
}
    /**
     * Get the tax query which was used by the main query.
     *
     * @return array
     */
    public static function get_main_tax_query()
{
}
    /**
     * Get the meta query which was used by the main query.
     *
     * @return array
     */
    public static function get_main_meta_query()
{
}
    /**
     * Based on WP_Query::parse_search
     */
    public static function get_main_search_query_sql()
{
}
    /**
     * Get an array of attributes and terms selected with the layered nav widget.
     *
     * @return array
     */
    public static function get_layered_nav_chosen_attributes()
{
}
    /**
     * Remove the add-to-cart param from pagination urls.
     *
     * @param string $url URL.
     * @return string
     */
    public function remove_add_to_cart_pagination($url)
{
}
    /**
     * Return a meta query for filtering by rating.
     *
     * @deprecated 3.0.0 Replaced with taxonomy.
     * @return array
     */
    public function rating_filter_meta_query()
{
}
    /**
     * Returns a meta query to handle product visibility.
     *
     * @deprecated 3.0.0 Replaced with taxonomy.
     * @param string $compare (default: 'IN').
     * @return array
     */
    public function visibility_meta_query($compare = 'IN')
{
}
    /**
     * Returns a meta query to handle product stock status.
     *
     * @deprecated 3.0.0 Replaced with taxonomy.
     * @param string $status (default: 'instock').
     * @return array
     */
    public function stock_status_meta_query($status = 'instock')
{
}
    /**
     * Layered nav init.
     *
     * @deprecated 2.6.0
     */
    public function layered_nav_init()
{
}
    /**
     * Get an unpaginated list all product IDs (both filtered and unfiltered). Makes use of transients.
     *
     * @deprecated 2.6.0 due to performance concerns
     */
    public function get_products_in_view()
{
}
    /**
     * Layered Nav post filter.
     *
     * @deprecated 2.6.0 due to performance concerns
     *
     * @param mixed $deprecated Deprecated.
     */
    public function layered_nav_query($deprecated)
{
}
    /**
     * Search post excerpt.
     *
     * @param string $where Where clause.
     *
     * @deprecated 3.2.0 - Not needed anymore since WordPress 4.5.
     */
    public function search_post_excerpt($where = '')
{
}
    /**
     * Remove the posts_where filter.
     *
     * @deprecated 3.2.0 - Nothing to remove anymore because search_post_excerpt() is deprecated.
     */
    public function remove_posts_where()
{
}
}
