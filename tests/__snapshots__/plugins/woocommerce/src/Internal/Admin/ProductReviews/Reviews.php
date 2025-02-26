<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductReviews;

/**
 * Handles backend logic for the Reviews component.
 */
class Reviews
{
    const MENU_SLUG = 'product-reviews';

    /**
     * Reviews page hook name.
     *
     * @var string|null
     */
    protected $reviews_page_hook = null;

    /**
     * Reviews list table instance.
     *
     * @var ReviewsListTable|null
     */
    protected $reviews_list_table = null;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Gets the required capability to access the reviews page and manage product reviews.
     *
     * @param string $context The context for which the capability is needed (e.g. `view` or `moderate`).
     * @return string
     */
    public static function get_capability(string $context = 'view'): string
    {
        // stub
    }

    /**
     * Registers the Product Reviews submenu page.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_reviews_page(): void
    {
        // stub
    }

    /**
     * Retrieves the URL to the product reviews page.
     *
     * @return string
     */
    public static function get_reviews_page_url(): string
    {
        // stub
    }

    /**
     * Determines whether the current page is the reviews page.
     *
     * @global WP_Screen $current_screen
     *
     * @return bool
     */
    public function is_reviews_page(): bool
    {
        // stub
    }

    /**
     * Loads the JavaScript required for inline replies and quick edit.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function load_javascript(): void
    {
        // stub
    }

    /**
     * Determines if the object is a review or a reply to a review.
     *
     * @param WP_Comment|mixed $object Object to check.
     * @return bool
     */
    protected function is_review_or_reply($object): bool
    {
        // stub
    }

    /**
     * Ajax callback for editing a review.
     *
     * This functionality is taken from {@see wp_ajax_edit_comment()} and is largely copy and pasted. The only thing
     * we want to change is the review row HTML in the response. WordPress core uses a comment list table and we need
     * to use our own {@see ReviewsListTable} class to support our custom columns.
     *
     * This ajax callback is registered with a lower priority than WordPress core's so that our code can run
     * first. If the supplied comment ID is not a review or a reply to a review, then we `return` early from this method
     * to allow the WordPress core callback to take over.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_edit_review(): void
    {
        // stub
    }

    /**
     * Ajax callback for replying to a review inline.
     *
     * This functionality is taken from {@see wp_ajax_replyto_comment()} and is largely copy and pasted. The only thing
     * we want to change is the review row HTML in the response. WordPress core uses a comment list table and we need
     * to use our own {@see ReviewsListTable} class to support our custom columns.
     *
     * This ajax callback is registered with a lower priority than WordPress core's so that our code can run
     * first. If the supplied comment ID is not a review or a reply to a review, then we `return` early from this method
     * to allow the WordPress core callback to take over.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_reply_to_review(): void
    {
        // stub
    }

    /**
     * Displays notices on the Reviews page.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function display_notices(): void
    {
        // stub
    }

    /**
     * May display the bulk action admin notice.
     *
     * @return void
     */
    protected function maybe_display_reviews_bulk_action_notice(): void
    {
        // stub
    }

    /**
     * Gets the applicable bulk action admin notice messages.
     *
     * @return array
     */
    protected function get_bulk_action_notice_messages(): array
    {
        // stub
    }

    /**
     * Counts the number of pending product reviews/replies, and returns the notification bubble if there's more than zero.
     *
     * @return string Empty string if there are no pending reviews, or bubble HTML if there are.
     */
    protected function get_pending_count_bubble(): string
    {
        // stub
    }

    /**
     * Highlights Product -> Reviews admin menu item when editing a review or a reply to a review.
     *
     * @global string $submenu_file
     *
     * @param string|mixed $parent_file Parent menu item.
     * @return string
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function edit_review_parent_file($parent_file)
    {
        // stub
    }

    /**
     * Returns a new instance of `ReviewsListTable`, with the screen argument specified.
     *
     * @return ReviewsListTable
     */
    protected function make_reviews_list_table(): Automattic\WooCommerce\Internal\Admin\ProductReviews\ReviewsListTable
    {
        // stub
    }

    /**
     * Initializes the list table.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function load_reviews_screen(): void
    {
        // stub
    }

    /**
     * Renders the Reviews page.
     *
     * @return void
     */
    public function render_reviews_list_table(): void
    {
        // stub
    }

}

