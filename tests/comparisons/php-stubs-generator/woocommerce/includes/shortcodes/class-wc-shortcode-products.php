<?php

/**
 * Products shortcode class.
 */
class WC_Shortcode_Products
{
    /**
     * Shortcode type.
     *
     * @since 3.2.0
     * @var   string
     */
    protected $type = 'products';
    /**
     * Attributes.
     *
     * @since 3.2.0
     * @var   array
     */
    protected $attributes = array();
    /**
     * Query args.
     *
     * @since 3.2.0
     * @var   array
     */
    protected $query_args = array();
    /**
     * Set custom visibility.
     *
     * @since 3.2.0
     * @var   bool
     */
    protected $custom_visibility = \false;
    /**
     * Initialize shortcode.
     *
     * @since 3.2.0
     * @param array  $attributes Shortcode attributes.
     * @param string $type       Shortcode type.
     */
    public function __construct($attributes = array(), $type = 'products')
    {
    }
    /**
     * Get shortcode attributes.
     *
     * @since  3.2.0
     * @return array
     */
    public function get_attributes()
    {
    }
    /**
     * Get query args.
     *
     * @since  3.2.0
     * @return array
     */
    public function get_query_args()
    {
    }
    /**
     * Get shortcode type.
     *
     * @since  3.2.0
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Get shortcode content.
     *
     * @since  3.2.0
     * @return string
     */
    public function get_content()
    {
    }
    /**
     * Parse attributes.
     *
     * @since  3.2.0
     * @param  array $attributes Shortcode attributes.
     * @return array
     */
    protected function parse_attributes($attributes)
    {
    }
    /**
     * Parse legacy attributes.
     *
     * @since  3.2.0
     * @param  array $attributes Attributes.
     * @return array
     */
    protected function parse_legacy_attributes($attributes)
    {
    }
    /**
     * Parse query args.
     *
     * @since  3.2.0
     * @return array
     */
    protected function parse_query_args()
    {
    }
    /**
     * Set skus query args.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_skus_query_args(&$query_args)
    {
    }
    /**
     * Set ids query args.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_ids_query_args(&$query_args)
    {
    }
    /**
     * Set attributes query args.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_attributes_query_args(&$query_args)
    {
    }
    /**
     * Set categories query args.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_categories_query_args(&$query_args)
    {
    }
    /**
     * Set tags query args.
     *
     * @since 3.3.0
     * @param array $query_args Query args.
     */
    protected function set_tags_query_args(&$query_args)
    {
    }
    /**
     * Set sale products query args.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_sale_products_query_args(&$query_args)
    {
    }
    /**
     * Set best selling products query args.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_best_selling_products_query_args(&$query_args)
    {
    }
    /**
     * Set top rated products query args.
     *
     * @since 3.6.5
     * @param array $query_args Query args.
     */
    protected function set_top_rated_products_query_args(&$query_args)
    {
    }
    /**
     * Set visibility as hidden.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_visibility_hidden_query_args(&$query_args)
    {
    }
    /**
     * Set visibility as catalog.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_visibility_catalog_query_args(&$query_args)
    {
    }
    /**
     * Set visibility as search.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_visibility_search_query_args(&$query_args)
    {
    }
    /**
     * Set visibility as featured.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_visibility_featured_query_args(&$query_args)
    {
    }
    /**
     * Set visibility query args.
     *
     * @since 3.2.0
     * @param array $query_args Query args.
     */
    protected function set_visibility_query_args(&$query_args)
    {
    }
    /**
     * Set product as visible when querying for hidden products.
     *
     * @since  3.2.0
     * @param  bool $visibility Product visibility.
     * @return bool
     */
    public function set_product_as_visible($visibility)
    {
    }
    /**
     * Get wrapper classes.
     *
     * @since  3.2.0
     * @param  int $columns Number of columns.
     * @return array
     */
    protected function get_wrapper_classes($columns)
    {
    }
    /**
     * Generate and return the transient name for this shortcode based on the query args.
     *
     * @since 3.3.0
     * @return string
     */
    protected function get_transient_name()
    {
    }
    /**
     * Run the query and return an array of data, including queried ids and pagination information.
     *
     * @since  3.3.0
     * @return object Object with the following props; ids, per_page, found_posts, max_num_pages, current_page
     */
    protected function get_query_results()
    {
    }
    /**
     * Loop over found products.
     *
     * @since  3.2.0
     * @return string
     */
    protected function product_loop()
    {
    }
    /**
     * Order by rating.
     *
     * @since  3.2.0
     * @param  array $args Query args.
     * @return array
     */
    public static function order_by_rating_post_clauses($args)
    {
    }
}
