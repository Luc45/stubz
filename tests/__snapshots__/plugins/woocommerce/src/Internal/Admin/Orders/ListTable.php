<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders;

/**
 * Admin list table for orders as managed by the OrdersTableDataStore.
 */
class ListTable extends \WP_List_Table
{
    /**
     * Order type.
     *
     * @var string
     */
    private $order_type = null;
    /**
     * Request vars.
     *
     * @var array
     */
    private $request = array();
    /**
     * Contains the arguments to be used in the order query.
     *
     * @var array
     */
    private $order_query_args = array();
    /**
     * Tracks if a filter (ie, date or customer filter) has been applied.
     *
     * @var bool
     */
    private $has_filter = false;
    /**
     * Page controller instance for this request.
     *
     * @var PageController
     */
    private $page_controller = null;
    /**
     * Tracks whether we're currently inside the trash.
     *
     * @var boolean
     */
    private $is_trash = false;
    /**
     * Caches order counts by status.
     *
     * @var array
     */
    private $status_count_cache = null;
    /**
     * Sets up the admin list table for orders (specifically, for orders managed by the OrdersTableDataStore).
     *
     * @see WC_Admin_List_Table_Orders for the corresponding class used in relation to the traditional WP Post store.
     */
    public function __construct()
{
}
    /**
     * Init method, invoked by DI container.
     *
     * @internal This method is not intended to be used directly (except for testing).
     * @param PageController $page_controller Page controller instance for this request.
     */
    final public function init(Automattic\WooCommerce\Internal\Admin\Orders\PageController $page_controller)
{
}
    /**
     * Performs setup work required before rendering the table.
     *
     * @param array $args Args to initialize this list table.
     *
     * @return void
     */
    public function setup($args = array()): void
{
}
    /**
     * Generates content for a single row of the table.
     *
     * @since 7.8.0
     *
     * @param \WC_Order $order The current order.
     */
    public function single_row($order)
{
}
    /**
     * Render individual column.
     *
     * @param string   $column_id Column ID to render.
     * @param WC_Order $order Order object.
     */
    public function render_column($column_id, $order)
{
}
    /**
     * Handles output for the default column.
     *
     * @param \WC_Order $order       Current WooCommerce order object.
     * @param string    $column_name Identifier for the custom column.
     */
    public function column_default($order, $column_name)
{
}
    /**
     * Sets up an items-per-page control.
     */
    private function items_per_page(): void
{
}
    /**
     * Saves the items-per-page setting.
     *
     * @param mixed  $default The default value.
     * @param string $option  The option being configured.
     * @param int    $value   The submitted option value.
     *
     * @return mixed
     */
    public function set_items_per_page($default, string $option, int $value)
{
}
    /**
     * Render the table.
     *
     * @return void
     */
    public function display()
{
}
    /**
     * Renders advice in the event that no orders exist yet.
     *
     * @return void
     */
    public function render_blank_state(): void
{
}
    /**
     * Retrieves the list of bulk actions available for this table.
     *
     * @return array
     */
    protected function get_bulk_actions()
{
}
    /**
     * Gets a list of CSS classes for the WP_List_Table table tag.
     *
     * @since 7.8.0
     *
     * @return string[] Array of CSS classes for the table tag.
     */
    protected function get_table_classes()
{
}
    /**
     * Prepares the list of items for displaying.
     */
    public function prepare_items()
{
}
    /**
     * Updates the WC Order Query arguments as needed to support orderable columns.
     */
    private function set_order_args()
{
}
    /**
     * Implements date (month-based) filtering.
     */
    private function set_date_args()
{
}
    /**
     * Implements filtering of orders by customer.
     */
    private function set_customer_args()
{
}
    /**
     * Implements filtering of orders by status.
     */
    private function set_status_args()
{
}
    /**
     * Implements order search.
     */
    private function set_search_args(): void
{
}
    /**
     * Get the list of views for this table (all orders, completed orders, etc, each with a count of the number of
     * corresponding orders).
     *
     * @return array
     */
    public function get_views()
{
}
    /**
     * Count orders by status.
     *
     * @param string|string[] $status The order status we are interested in.
     *
     * @return int
     */
    private function count_orders_by_status($status): int
{
}
    /**
     * Checks whether the blank state should be rendered or not. This depends on whether there are others with a visible
     * status.
     *
     * @return boolean TRUE when the blank state should be rendered, FALSE otherwise.
     */
    private function should_render_blank_state(): bool
{
}
    /**
     * Returns a list of slug and labels for order statuses that should be visible in the status list.
     *
     * @return array slug => label array of order statuses.
     */
    private function get_visible_statuses(): array
{
}
    /**
     * Form a link to use in the list of table views.
     *
     * @param string $slug    Slug used to identify the view (usually the order status slug).
     * @param string $name    Human-readable name of the view (usually the order status label).
     * @param int    $count   Number of items in this view.
     * @param bool   $current If this is the current view.
     *
     * @return string
     */
    private function get_view_link(string $slug, string $name, int $count, bool $current): string
{
}
    /**
     * Extra controls to be displayed between bulk actions and pagination.
     *
     * @param string $which Either 'top' or 'bottom'.
     */
    protected function extra_tablenav($which)
{
}
    /**
     * Render the months filter dropdown.
     *
     * @return void
     */
    private function months_filter()
{
}
    /**
     * Get order year-months cache. We cache the results in the options table, since these results will change very infrequently.
     * We use the heuristic to always return current year-month when getting from cache to prevent an additional query.
     *
     * @return array List of year-months.
     */
    protected function get_and_maybe_update_months_filter_cache(): array
{
}
    /**
     * Render the customer filter dropdown.
     *
     * @return void
     */
    public function customers_filter()
{
}
    /**
     * Get list columns.
     *
     * @return array
     */
    public function get_columns()
{
}
    /**
     * Defines the default sortable columns.
     *
     * @return string[]
     */
    public function get_sortable_columns()
{
}
    /**
     * Specify the columns we wish to hide by default.
     *
     * @param array     $hidden Columns set to be hidden.
     * @param WP_Screen $screen Screen object.
     *
     * @return array
     */
    public function default_hidden_columns(array $hidden, WP_Screen $screen)
{
}
    /**
     * Checklist column, used for selecting items for processing by a bulk action.
     *
     * @param WC_Order $item The order object for the current row.
     *
     * @return string
     */
    public function column_cb($item)
{
}
    /**
     * Renders the order number, customer name and provides a preview link.
     *
     * @param WC_Order $order The order object for the current row.
     *
     * @return void
     */
    public function render_order_number_column(WC_Order $order): void
{
}
    /**
     * Get the edit link for an order.
     *
     * @param WC_Order $order Order object.
     *
     * @return string Edit link for the order.
     */
    private function get_order_edit_link(WC_Order $order): string
{
}
    /**
     * Renders the order date.
     *
     * @param WC_Order $order The order object for the current row.
     *
     * @return void
     */
    public function render_order_date_column(WC_Order $order): void
{
}
    /**
     * Renders the order status.
     *
     * @param WC_Order $order The order object for the current row.
     *
     * @return void
     */
    public function render_order_status_column(WC_Order $order): void
{
}
    /**
     * Gets the order status label for an order.
     *
     * @param WC_Order $order The order object.
     *
     * @return string
     */
    private function get_order_status_label(WC_Order $order): string
{
}
    /**
     * Renders order billing information.
     *
     * @param WC_Order $order The order object for the current row.
     *
     * @return void
     */
    public function render_billing_address_column(WC_Order $order): void
{
}
    /**
     * Renders order shipping information.
     *
     * @param WC_Order $order The order object for the current row.
     *
     * @return void
     */
    public function render_shipping_address_column(WC_Order $order): void
{
}
    /**
     * Renders the order total.
     *
     * @param WC_Order $order The order object for the current row.
     *
     * @return void
     */
    public function render_order_total_column(WC_Order $order): void
{
}
    /**
     * Renders order actions.
     *
     * @param WC_Order $order The order object for the current row.
     *
     * @return void
     */
    public function render_wc_actions_column(WC_Order $order): void
{
}
    /**
     * Outputs hidden fields used to retain state when filtering.
     *
     * @return void
     */
    private function print_hidden_form_fields(): void
{
}
    /**
     * Gets the current action selected from the bulk actions dropdown.
     *
     * @return string|false The action name. False if no action was selected.
     */
    public function current_action()
{
}
    /**
     * Handle bulk actions.
     */
    public function handle_bulk_actions()
{
}
    /**
     * Implements the "remove personal data" bulk action.
     *
     * @param array $order_ids The Order IDs.
     * @return int Number of orders modified.
     */
    private function do_bulk_action_remove_personal_data($order_ids): int
{
}
    /**
     * Implements the "mark <status>" bulk action.
     *
     * @param array  $order_ids  The order IDs to change.
     * @param string $new_status The new order status.
     * @return int Number of orders modified.
     */
    private function do_bulk_action_mark_orders($order_ids, $new_status): int
{
}
    /**
     * Handles bulk trashing of orders.
     *
     * @param int[] $ids Order IDs to be trashed.
     * @param bool  $force_delete When set, the order will be completed deleted. Otherwise, it will be trashed.
     *
     * @return int Number of orders that were trashed.
     */
    private function do_delete(array $ids, bool $force_delete = false): int
{
}
    /**
     * Handles bulk restoration of trashed orders.
     *
     * @param array $ids Order IDs to be restored to their previous status.
     *
     * @return int Number of orders that were restored from the trash.
     */
    private function do_untrash(array $ids): int
{
}
    /**
     * Show confirmation message that order status changed for number of orders.
     */
    public function bulk_action_notices()
{
}
    /**
     * Enqueue list table scripts.
     *
     * @return void
     */
    public function enqueue_scripts(): void
{
}
    /**
     * Returns the HTML for the order preview template.
     *
     * @return string HTML template.
     */
    public function get_order_preview_template(): string
{
}
    /**
     * Renders the search box with various options to limit order search results.
     *
     * @param string $text The search button text.
     * @param string $input_id The search input ID.
     *
     * @return void
     */
    public function search_box($text, $input_id)
{
}
    /**
     * Renders the search filter dropdown.
     *
     * @return void
     */
    private function search_filter()
{
}
}