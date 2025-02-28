<?php
/**
 * WC_Admin_List_Table_Products Class.
 */
class WC_Admin_List_Table_Products extends \WC_Admin_List_Table
{
    /**
     * Post type.
     *
     * @var string
     */
    protected $list_table_type = 'product';
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Render blank state.
     */
    protected function render_blank_state()
{
}
    /**
     * Define primary column.
     *
     * @return string
     */
    protected function get_primary_column()
{
}
    /**
     * Get row actions to show in the list table.
     *
     * @param array   $actions Array of actions.
     * @param WP_Post $post Current post object.
     * @return array
     */
    protected function get_row_actions($actions, $post)
{
}
    /**
     * Define which columns are sortable.
     *
     * @param array $columns Existing columns.
     * @return array
     */
    public function define_sortable_columns($columns)
{
}
    /**
     * Define which columns to show on this screen.
     *
     * @param array $columns Existing columns.
     * @return array
     */
    public function define_columns($columns)
{
}
    /**
     * Pre-fetch any data for the row each column has access to it. the_product global is there for bw compat.
     *
     * @param int $post_id Post ID being shown.
     */
    protected function prepare_row_data($post_id)
{
}
    /**
     * Render column: thumb.
     */
    protected function render_thumb_column()
{
}
    /**
     * Render column: name.
     */
    protected function render_name_column()
{
}
    /**
     * Render column: sku.
     */
    protected function render_sku_column()
{
}
    /**
     * Render column: price.
     */
    protected function render_price_column()
{
}
    /**
     * Render column: product_cat.
     */
    protected function render_product_cat_column()
{
}
    /**
     * Render column: product_tag.
     */
    protected function render_product_tag_column()
{
}
    /**
     * Render column: featured.
     */
    protected function render_featured_column()
{
}
    /**
     * Render column: is_in_stock.
     */
    protected function render_is_in_stock_column()
{
}
    /**
     * Query vars for custom searches.
     *
     * @param mixed $public_query_vars Array of query vars.
     * @return array
     */
    public function add_custom_query_var($public_query_vars)
{
}
    /**
     * Render any custom filters and search inputs for the list table.
     */
    protected function render_filters()
{
}
    /**
     * Render the product category filter for the list table.
     *
     * @since 3.5.0
     */
    protected function render_products_category_filter()
{
}
    /**
     * Render the product type filter for the list table.
     *
     * @since 3.5.0
     */
    protected function render_products_type_filter()
{
}
    /**
     * Render the stock status filter for the list table.
     *
     * @since 3.5.0
     */
    public function render_products_stock_status_filter()
{
}
    /**
     * Search by SKU or ID for products.
     *
     * @deprecated 4.4.0 Logic moved to query_filters.
     * @param string $where Where clause SQL.
     * @return string
     */
    public function sku_search($where)
{
}
    /**
     * Change views on the edit product screen.
     *
     * @param  array $views Array of views.
     * @return array
     */
    public function product_views($views)
{
}
    /**
     * Change the label when searching products
     *
     * @param string $query Search Query.
     * @return string
     */
    public function search_label($query)
{
}
    /**
     * Handle any custom filters.
     *
     * @param array $query_vars Query vars.
     * @return array
     */
    protected function query_filters($query_vars)
{
}
    /**
     * Undocumented function
     *
     * @param array    $args  Array of SELECT statement pieces (from, where, etc).
     * @param WP_Query $query WP_Query instance.
     * @return array
     */
    public function posts_clauses($args, $query)
{
}
    /**
     * Remove ordering queries.
     *
     * @param array $posts Posts array, keeping this for backwards compatibility defaulting to empty array.
     * @return array
     */
    public function remove_ordering_args($posts = array())
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
     * Handle sku sorting.
     *
     * @param array $args Query args.
     * @return array
     */
    public function order_by_sku_asc_post_clauses($args)
{
}
    /**
     * Handle sku sorting.
     *
     * @param array $args Query args.
     * @return array
     */
    public function order_by_sku_desc_post_clauses($args)
{
}
    /**
     * Filter by type.
     *
     * @param array $args Query args.
     * @return array
     */
    public function filter_downloadable_post_clauses($args)
{
}
    /**
     * Filter by type.
     *
     * @param array $args Query args.
     * @return array
     */
    public function filter_virtual_post_clauses($args)
{
}
    /**
     * Filter by stock status.
     *
     * @param array $args Query args.
     * @return array
     */
    public function filter_stock_status_post_clauses($args)
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
     * Modifies post query so that it includes parent products whose variations have particular shipping class assigned.
     *
     * @param array    $pieces   Array of SELECT statement pieces (from, where, etc).
     * @param WP_Query $wp_query WP_Query instance.
     * @return array             Array of products, including parents of variations.
     */
    public function add_variation_parents_for_shipping_class($pieces, $wp_query)
{
}
    /**
     * Add a sample product badge to the product list table.
     *
     * @param string $column_name Column name.
     * @param int    $post_id     Post ID.
     *
     * @since 8.8.0
     */
    public function add_sample_product_badge($column_name, $post_id)
{
}
}
