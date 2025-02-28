<?php

/**
 * WC_Admin_List_Table_Orders Class.
 */
class WC_Admin_List_Table_Orders extends \WC_Admin_List_Table
{
    /**
     * Post type.
     *
     * @var string
     */
    protected $list_table_type = 'shop_order';
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
     * Define hidden columns.
     *
     * @return array
     */
    protected function define_hidden_columns()
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
     * Define bulk actions.
     *
     * @param array $actions Existing actions.
     * @return array
     */
    public function define_bulk_actions($actions)
    {
    }
    /**
     * Pre-fetch any data for the row each column has access to it. the_order global is there for bw compat.
     *
     * @param int $post_id Post ID being shown.
     */
    protected function prepare_row_data($post_id)
    {
    }
    /**
     * Render column: order_number.
     */
    protected function render_order_number_column()
    {
    }
    /**
     * Render column: order_status.
     */
    protected function render_order_status_column()
    {
    }
    /**
     * Render column: order_date.
     */
    protected function render_order_date_column()
    {
    }
    /**
     * Render column: order_total.
     */
    protected function render_order_total_column()
    {
    }
    /**
     * Render column: wc_actions.
     */
    protected function render_wc_actions_column()
    {
    }
    /**
     * Render column: billing_address.
     */
    protected function render_billing_address_column()
    {
    }
    /**
     * Render column: shipping_address.
     */
    protected function render_shipping_address_column()
    {
    }
    /**
     * Template for order preview.
     *
     * @since 3.3.0
     */
    public function order_preview_template()
    {
    }
    /**
     * Get items to display in the preview as HTML.
     *
     * @param  WC_Order $order Order object.
     * @return string
     */
    public static function get_order_preview_item_html($order)
    {
    }
    /**
     * Get actions to display in the preview as HTML.
     *
     * @param  WC_Order $order Order object.
     * @return string
     */
    public static function get_order_preview_actions_html($order)
    {
    }
    /**
     * Get order details to send to the ajax endpoint for previews.
     *
     * @param  WC_Order $order Order object.
     * @return array
     */
    public static function order_preview_get_order_details($order)
    {
    }
    /**
     * Handle bulk actions.
     *
     * @param  string $redirect_to URL to redirect to.
     * @param  string $action      Action name.
     * @param  array  $ids         List of ids.
     * @return string
     */
    public function handle_bulk_actions($redirect_to, $action, $ids)
    {
    }
    /**
     * Show confirmation message that order status changed for number of orders.
     */
    public function bulk_admin_notices()
    {
    }
    /**
     * See if we should render search filters or not.
     */
    public function restrict_manage_posts()
    {
    }
    /**
     * Render any custom filters and search inputs for the list table.
     */
    protected function render_filters()
    {
    }
    /**
     * Handle any filters.
     *
     * @param array $query_vars Query vars.
     * @return array
     */
    public function request_query($query_vars)
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
     * Change the label when searching orders.
     *
     * @param mixed $query Current search query.
     * @return string
     */
    public function search_label($query)
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
     * Search custom fields as well as content.
     *
     * @param WP_Query $wp Query object.
     */
    public function search_custom_fields($wp)
    {
    }
}