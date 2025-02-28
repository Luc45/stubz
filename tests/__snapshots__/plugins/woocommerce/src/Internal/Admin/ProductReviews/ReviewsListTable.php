<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductReviews;

/**
 * Handles the Product Reviews page.
 */
class ReviewsListTable extends \WP_List_Table
{
    /**
     * Memoization flag to determine if the current user can edit the current review.
     *
     * @var bool
     */
    private $current_user_can_edit_review = false;

    /**
     * Memoization flag to determine if the current user can moderate reviews.
     *
     * @var bool
     */
    private $current_user_can_moderate_reviews = null;

    /**
     * Current rating of reviews to display.
     *
     * @var int
     */
    private $current_reviews_rating = 0;

    /**
     * Current product the reviews should be displayed for.
     *
     * @var WC_Product|null Product or null for all products.
     */
    private $current_product_for_reviews = null;

    /**
     * Constructor.
     *
     * @param array|string $args Array or string of arguments.
     */
    public function __construct($args = array())
{
}
    /**
     * Prepares reviews for display.
     *
     * @return void
     */
    public function prepare_items(): void
{
}
    /**
     * Returns the number of items to show per page.
     *
     * @return int Customized per-page value if available, or 20 as the default.
     */
    protected function get_per_page(): int
{
}
    /**
     * Sets the product to filter reviews by.
     *
     * @return void
     */
    protected function set_review_product(): void
{
}
    /**
     * Sets the `$comment_status` global based on the current request.
     *
     * @global string $comment_status
     *
     * @return void
     */
    protected function set_review_status(): void
{
}
    /**
     * Sets the `$comment_type` global based on the current request.
     *
     * @global string $comment_type
     *
     * @return void
     */
    protected function set_review_type(): void
{
}
    /**
     * Builds the `orderby` and `order` arguments based on the current request.
     *
     * @return array
     */
    protected function get_sort_arguments(): array
{
}
    /**
     * Builds the `type` argument based on the current request.
     *
     * @return array
     */
    protected function get_filter_type_arguments(): array
{
}
    /**
     * Builds the `meta_query` arguments based on the current request.
     *
     * @return array
     */
    protected function get_filter_rating_arguments(): array
{
}
    /**
     * Gets the `post_id` argument based on the current request.
     *
     * @return array
     */
    public function get_filter_product_arguments(): array
{
}
    /**
     * Gets the `status` argument based on the current request.
     *
     * @return array
     */
    protected function get_status_arguments(): array
{
}
    /**
     * Gets the `search` argument based on the current request.
     *
     * @return array
     */
    protected function get_search_arguments(): array
{
}
    /**
     * Returns the `offset` argument based on the current request.
     *
     * @return array
     */
    protected function get_offset_arguments(): array
{
}
    /**
     * Returns the arguments used to count the total number of comments.
     *
     * @param array $default_query_args Query args for the main request.
     * @return array
     */
    protected function get_total_comments_arguments(array $default_query_args): array
{
}
    /**
     * Displays the product reviews HTML table.
     *
     * Reimplements {@see WP_Comment_::display()} but we change the ID to match the one output by {@see WP_Comments_List_Table::display()}.
     * This will automatically handle additional CSS for consistency with the comments page.
     *
     * @return void
     */
    public function display(): void
{
}
    /**
     * Render a single row HTML.
     *
     * @global WP_Post $post
     * @global WP_Comment $comment
     *
     * @param WP_Comment|mixed $item Review or reply being rendered.
     * @return void
     */
    public function single_row($item): void
{
}
    /**
     * Generate and display row actions links.
     *
     * @see WP_Comments_List_Table::handle_row_actions() for consistency.
     *
     * @global string $comment_status Status for the current listed comments.
     *
     * @param WP_Comment|mixed $item        The product review or reply in context.
     * @param string|mixed     $column_name Current column name.
     * @param string|mixed     $primary     Primary column name.
     * @return string
     */
    protected function handle_row_actions($item, $column_name, $primary): string
{
}
    /**
     * Gets the columns for the table.
     *
     * @return array Table columns and their headings.
     */
    public function get_columns(): array
{
}
    /**
     * Gets the name of the default primary column.
     *
     * @return string Name of the primary column.
     */
    protected function get_primary_column_name(): string
{
}
    /**
     * Gets a list of sortable columns.
     *
     * Key is the column ID and value is which database column we perform the sorting on.
     * The `rating` column uses a unique key instead, as that requires sorting by meta value.
     *
     * @return array
     */
    protected function get_sortable_columns(): array
{
}
    /**
     * Returns a list of available bulk actions.
     *
     * @global string $comment_status
     *
     * @return array
     */
    protected function get_bulk_actions(): array
{
}
    /**
     * Returns the current action select in bulk actions menu.
     *
     * This is overridden in order to support `delete_all` for use in {@see ReviewsListTable::process_bulk_action()}
     *
     * {@see WP_Comments_List_Table::current_action()} for reference.
     *
     * @return string|false
     */
    public function current_action()
{
}
    /**
     * Processes the bulk actions.
     *
     * @return void
     */
    public function process_bulk_action(): void
{
}
    /**
     * Returns an array of supported statuses and their labels.
     *
     * @return array
     */
    protected function get_status_filters(): array
{
}
    /**
     * Returns the available status filters.
     *
     * @see WP_Comments_List_Table::get_views() for consistency.
     *
     * @global int    $post_id
     * @global string $comment_status
     * @global string $comment_type
     *
     * @return array An associative array of fully-formed comment status links. Includes 'All', 'Pending', 'Approved', 'Spam', and 'Trash'.
     */
    protected function get_views(): array
{
}
    /**
     * Gets the base URL for a view, excluding the status (that should be appended).
     *
     * @param string $comment_type Comment type filter.
     * @param int    $post_id      Current post ID.
     * @return string
     */
    protected function get_view_url(string $comment_type, int $post_id): string
{
}
    /**
     * Gets the number of reviews (including review replies) for a given status.
     *
     * @param string $status     Status key from {@see ReviewsListTable::get_status_filters()}.
     * @param int    $product_id ID of the product if we're filtering by product in this request. Otherwise, `0` for no product filters.
     * @return int
     */
    protected function get_review_count(string $status, int $product_id): int
{
}
    /**
     * Converts a status key into its equivalent `comment_approved` database column value.
     *
     * @param string $status Status key from {@see ReviewsListTable::get_status_filters()}.
     * @return string
     */
    protected function convert_status_to_query_value(string $status): string
{
}
    /**
     * Outputs the text to display when there are no reviews to display.
     *
     * @see WP_List_Table::no_items()
     *
     * @global string $comment_status
     *
     * @return void
     */
    public function no_items(): void
{
}
    /**
     * Renders the checkbox column.
     *
     * @param WP_Comment|mixed $item Review or reply being rendered.
     * @return void
     */
    protected function column_cb($item): void
{
}
    /**
     * Renders the review column.
     *
     * @see WP_Comments_List_Table::column_comment() for consistency.
     *
     * @param WP_Comment|mixed $item Review or reply being rendered.
     * @return void
     */
    protected function column_comment($item): void
{
}
    /**
     * Gets the in-reply-to-review text.
     *
     * @param WP_Comment|mixed $reply Reply to review.
     * @return string
     */
    private function get_in_reply_to_review_text($reply): string
{
}
    /**
     * Renders the author column.
     *
     * @see WP_Comments_List_Table::column_author() for consistency.
     *
     * @param WP_Comment|mixed $item Review or reply being rendered.
     * @return void
     */
    protected function column_author($item): void
{
}
    /**
     * Gets the item author URL.
     *
     * @return string
     */
    private function get_item_author_url(): string
{
}
    /**
     * Gets the item author URL for display.
     *
     * @param string $author_url The review or reply author URL (raw).
     * @return string
     */
    private function get_item_author_url_for_display($author_url): string
{
}
    /**
     * Renders the "submitted on" column.
     *
     * Note that the output is consistent with {@see WP_Comments_List_Table::column_date()}.
     *
     * @param WP_Comment|mixed $item Review or reply being rendered.
     * @return void
     */
    protected function column_date($item): void
{
}
    /**
     * Renders the product column.
     *
     * @see WP_Comments_List_Table::column_response() for consistency.
     *
     * @param WP_Comment|mixed $item Review or reply being rendered.
     * @return void
     */
    protected function column_response($item): void
{
}
    /**
     * Renders the type column.
     *
     * @param WP_Comment|mixed $item Review or reply being rendered.
     * @return void
     */
    protected function column_type($item): void
{
}
    /**
     * Renders the rating column.
     *
     * @param WP_Comment|mixed $item Review or reply being rendered.
     * @return void
     */
    protected function column_rating($item): void
{
}
    /**
     * Renders any custom columns.
     *
     * @param WP_Comment|mixed $item        Review or reply being rendered.
     * @param string|mixed     $column_name Name of the column being rendered.
     * @return void
     */
    protected function column_default($item, $column_name): void
{
}
    /**
     * Runs a filter hook for a given column content.
     *
     * @param string|mixed     $column_name The column being output.
     * @param string|mixed     $output      The output content (may include HTML).
     * @param WP_Comment|mixed $item        The review or reply being rendered.
     * @return string
     */
    protected function filter_column_output($column_name, $output, $item): string
{
}
    /**
     * Renders the extra controls to be displayed between bulk actions and pagination.
     *
     * @global string $comment_status
     * @global string $comment_type
     *
     * @param string|mixed $which Position (top or bottom).
     * @return void
     */
    protected function extra_tablenav($which): void
{
}
    /**
     * Displays a review type drop-down for filtering reviews in the Product Reviews list table.
     *
     * @see WP_Comments_List_Table::comment_type_dropdown() for consistency.
     *
     * @param string|mixed $current_type The current comment item type slug.
     * @return void
     */
    protected function review_type_dropdown($current_type): void
{
}
    /**
     * Displays a review rating drop-down for filtering reviews in the Product Reviews list table.
     *
     * @param int|string|mixed $current_rating Rating to display reviews for.
     * @return void
     */
    public function review_rating_dropdown($current_rating): void
{
}
    /**
     * Displays a product search input for filtering reviews by product in the Product Reviews list table.
     *
     * @param WC_Product|null $current_product The current product (or null when displaying all reviews).
     * @return void
     */
    protected function product_search(WC_Product|null $current_product): void
{
}
    /**
     * Displays a review count bubble.
     *
     * Based on {@see WP_List_Table::comments_bubble()}, but overridden, so we can customize the URL and text output.
     *
     * @param int|mixed $post_id          The product ID.
     * @param int|mixed $pending_comments Number of pending reviews.
     *
     * @return void
     */
    protected function comments_bubble($post_id, $pending_comments): void
{
}
}